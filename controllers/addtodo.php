<?php

include_once "../fonctions/db.php";
$laTache = $_GET['todo'];
// $laTache = $GLOBALS['_GET']['todo'];

if($laTache !== ""){
  $connect = connectToDB();

  // Preparer la requete:
  $preparedRequest = mysqli_prepare($connect, "INSERT INTO taches (nom) VALUES (?)");

  // Lier la donnée:
  $statment = mysqli_stmt_bind_param($preparedRequest, 's', $laTache);

  // Envoyer la requete:
  mysqli_stmt_execute($preparedRequest);
  
  // Rediriger l'utilisateur vers: todo.php
  header("Location: /todo.php");

}else{
  // Rediriger l'utilisateur vers: todo.php?error=InputVIDE
  header("Location: /todo.php?error=InputVIDE");

}

?>


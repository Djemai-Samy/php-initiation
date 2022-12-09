<?php
include_once "../fonctions/db.php";
$laTache = $GLOBALS['_GET']['todo'];

if($laTache !== ""){
  $connect = connectToDB();

  //2 Créer une requete SQL: INSERT
  
  //Créer une requete sql qui ajoute la tache la table todos:
  $requeteSQl = 'INSERT INTO taches (nom) VALUES ("'.$laTache.'")';
  
  //3 Envoyer la requete )
  $result = mysqli_query($connect, $requeteSQl);
  
  //Rediriger l'utilisateur vers: todo.php
  header("Location: /todo.php");

}else{
  
  header("Location: /todo.php?error=EmptyInput");
}

?>
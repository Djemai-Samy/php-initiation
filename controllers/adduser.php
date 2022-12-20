<?php
  include_once "../fonctions/db.php";
  
  if(isset($_GET['nom'], $_GET['prenom'],$_GET['email'])){
  //Recuperer les entrées de l'utilisateur. $GLOBALS.
  $leNom = htmlspecialchars($GLOBALS['_GET']['nom']);
  $lePrenom = htmlspecialchars($GLOBALS['_GET']['prenom']);
  $email = htmlspecialchars($GLOBALS['_GET']['email']);

  if($leNom !== "" && $lePrenom !== "" && $email !== ""){
    //Se connecter la DB
  $laConnexion = connectToDB();

  //Préparer une requete:
  $preparedRequest = mysqli_prepare($laConnexion, "INSERT INTO users (nom, prenom, email) VALUES (?, ?, ?)");

  //Lier la requete avec les données:
  $statment = mysqli_stmt_bind_param($preparedRequest, 'sss', $leNom, $lePrenom, $email);

  //Envoyer la requete:
  mysqli_stmt_execute($preparedRequest);

  //Rediriger vers une autre page
  header("Location: /users.php");
  
}else{
  header("Location: /users.php?error=InputVide");
}
  }else{
   header("Location: /users.php");
  }
?>

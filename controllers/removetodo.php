<?php
$id = $GLOBALS['_GET']['id'];

//avoir la connection a la db
include_once '../fonctions/db.php';
$maConnection = connectToDB();

var_dump($maConnection);

//Preparer la requete
$requetePreparer = mysqli_prepare($maConnection, 'DELETE FROM taches WHERE id=?');

//Lier les données dans la requete
mysqli_stmt_bind_param($requetePreparer, 'i', $id);

//Executer la requete
mysqli_stmt_execute($requetePreparer);

//Rediriger user vers todo.php
header('Location: /todo.php');
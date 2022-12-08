<?php
$leTache = $GLOBALS['_GET']['todo'];

//1 Connecter la BD
$dbHost = "localhost";
$utilisateur = "root";
$dbPassword = "";
$dbName = "todos";

$connect = mysqli_connect($dbHost, $utilisateur, $dbPassword, $dbName);
var_dump($connect);

//2 Créer une requete SQL: INSERT

//3 Envoyer la requete 
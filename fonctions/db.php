<?php
function connectToDB(){
  $dbHost = "localhost";
  $utilisateur = "root";
  $dbPassword = "";
  $dbName = "todos";

  $connect = mysqli_connect($dbHost, $utilisateur, $dbPassword, $dbName);

  return $connect;
}
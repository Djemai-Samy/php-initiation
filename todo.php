<?php
//Se connecter a la DB
include_once './fonctions/db.php';
$connect = connectToDB();

$requesteSQL = 'SELECT * FROM taches';

$result = mysqli_query($connect, $requesteSQL);

$todos = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo liste</title>
</head>
  <body>
    <?php
      include "./composants/navbar.php";
    ?>
    <h1>ToDo liste</h1>
    <form action="/controllers/addtodo.php" method="GET">
      <input name="todo" placeholder="Entrez une tache"/>
      <p><?= isset($GLOBALS['_GET']["error"]) ? "Input ne peut pas etre vide" : "" ?></p>

      
      <button>Valider</button>
    </form>
    <div>
      <?php
        foreach($todos as $key => $val){
          echo '<p>'.htmlspecialchars($val['nom']) .'</p>';
          echo '<form action="./controllers/removetodo.php">
                  <input name="id" value="'.$val['id'].'" hidden />
                  <button>Supprimer</button>
                </form>';
        }
      ?>
    </div>

  </body>
</html>

//Supprimer une tache
//Modifier isDone
//Importance



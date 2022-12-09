
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
      <button>Valider</button>
    </form>
    <div>
      <?php
        foreach($todos as $key => $val){
          echo '<p>'.$val['nom'].'</p>';

        }
      ?>
    </div>

  </body>
</html>


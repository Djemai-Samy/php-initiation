
<?php
// var_dump($GLOBALS)
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
      <input type="text" name="todo" placeholder="Entrez une tache"/>
      <button>Valider</button>
      <?php
        
      ?>
    </form>
  </body>
</html>


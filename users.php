<?php
  // var_dump($GLOBALS);

  //Connexion a la DB
  include "./fonctions/db.php";
  $connect = connectToDB();

  $request = "SELECT * FROM users";

  $result = mysqli_query($connect, $request);

  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //var_dump($users)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utilisateurs</title>
</head>
<body>
    <form action="/controllers/adduser.php" method="GET" >
      <input type="text" name="nom" placeholder="Votre nom" />
      <input type="text" name="prenom" placeholder="Votre prenom" />
      <input type="email" name="email" placeholder="Votre email" />
      <button>Valider</button>
      <p> <?= isset($_GET['error']) ? "Les entrées sont vides" : "" ?> </p>
    </form>
    <div>
      <?php
        foreach($users as $key => $user){
          echo '<div>
            <h2>'.$user['nom']." ".$user['prenom'].'</h2>
            <p>'.$user['email'].'</p>
          </div>';
        }
      ?>
    </div>
</body>
</html>





<!-- 1. Créer une table dans la base de données: id, nom, prenom, email. done

2. Dans users.php, ajouter un formulaire: 
  2.1 nom, prenom, email. DONE
  2.2 Le formulaire envoie une requete vers: /controllers/adduser.php. DONE

3. Dans /controllers/adduser.php:
  3.1 Tester si les entrées ne sont pas vides DONE
  3.2 Enregistrer les données dans la BD. DONE
  3.3 Rediriger l'utilisateur vers users.php DONE

4. Dans users.php: Chercher la liste des utilisateurs depuis la DB. done

5. Dans users.php: Utiliser une boucle pour afficher tous les utilisateurs DONE -->

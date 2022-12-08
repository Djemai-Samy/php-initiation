<?php

  $users = [
    [
    'nom' => 'Djemai', 
    'prenom' =>"Samy", 
    'imageUrl'=>"https://cdn.shopify.com/s/files/1/1931/4545/collections/la-photo-de-montagne-paysages-des-alpes-mont-blanc-oisans-647613.jpg?v=1642220795", 
    'isOnline' => false
    ],
    [
      'nom' => 'Marcheschi', 
      'prenom' =>"Thomas", 
      'imageUrl'=>"https://cdn.shopify.com/s/files/1/1931/4545/collections/la-photo-de-montagne-paysages-des-alpes-mont-blanc-oisans-647613.jpg?v=1642220795", 
      'isOnline' => true
    ],
    [
      'nom' => 'MAC FLY', 
      'prenom' =>"Marty", 
      'imageUrl'=>"https://cache.cosmopolitan.fr/data/photo/w1000_ci/1jw/anecdote-tournage-retour-vers-futur-michael-j-fox.jpg", 
      'isOnline' => true
    ],
    [
      'nom' => 'Asri', 
      'prenom' =>"Assia", 
      'imageUrl'=>"https://www.shutterstock.com/image-photo/portrait-funny-smart-baby-girl-260nw-105197633.jpg", 
      'isOnline' => true
    ],
    [
      'nom' => 'Colomb', 
      'prenom' =>"Nathalie", 
      'imageUrl'=>"https://www.shutterstock.com/fr/image-photo/white-transparent-leaf-on-mirror-surface-1029171697", 
      'isOnline' => true
    ],

];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les fonctions</title>
</head>
<body>
  <?php
    include "./composants/navbar.php";
  ?>
  <h1>Les fonctions</h1>

  <section>
    <h2>Une fonction simple</h2>
    <?php
      function bonjour(){
        echo "<p>Bonjour!</p>";
        echo "<p>Comment allez vous?</p>";
      }

      bonjour();
    ?>
    <p>Du HTML au milieu</p>
    
    <?php
      bonjour();
    ?>
  </section>

  <section>
    <h2>Fonctions parametrées</h2>
    <?php
      function afficheUser($nom, $prenom, $imageURL, $isOnline){
          $color = $isOnline ? 'green' : 'red';

        echo "<div style='border: 3px solid $color; border-radius:20px; max-width:500px; padding:20px; display:flex; justify-content:center; align-items:center;'>
                <img src='$imageURL' style='width:50px; height:50px; border-radius:25px;'/>
                <p style='font-size:2em;'>$nom</p>
                <p style='font-size:1.7em;'>$prenom</p>
              </div>";
      }

      function afficheTousUsers($theUsers){
        foreach($theUsers as $key => $value){
            afficheUser($value['nom'], $value['prenom'], $value['imageUrl'], $value['isOnline']);
        }
      }

      afficheTousUsers($users);
     
    ?>

    <div>
      <h3>Exercice</h3>
      <?php
        //Exercice:
        // 1- Créer une fonction appelée: 'table' qui prend en paramètre un nombre:
        function table($leNombre){
          echo "<h3>La table de multiplication de $leNombre</h3>";
          
          echo "<div style='border:2px solid black;'>";
          
          // 1.1- Affiche la table de multiplication du nombre recu en paramètre
          for($i = 0; $i<=10; $i++){
            echo "<p>$leNombre x $i = ".($leNombre * $i).'</p>';
          }
          echo "</div>";
        }
        
        //2 Utiliser la fonction 'table' avec: 3, 7, 12
        table(3);
        table(7);
        table(12);
      ?>
    </div>
  </section>

  <section>
    <h2>Le retour d'une fonction</h2>
    <?php
      function retourneBonjour(){
        //Serie d'insctructions
        return 'Bonjour';
      }

      echo retourneBonjour();
     

      function addition($a, $b){
        $resultat = $a + $b;
        return "L'addition de 5 et 3 est de: $resultat";
      }

      echo addition(5, 3);

      //Exercice:
      // Créer une fonction qui prend en paramètre un tableau de nombres, et retourne la moyenne des nombres du tableau:  function moyenne( array $notes): int
      function moyenne($notes){
        //Additioner les notes
        $somme = array_sum($notes);
        
        //Diviser par le nombre de notes
        $laMoyenne = $somme / count($notes);

        return $laMoyenne;
      }

      //Utiliser la fonction avec: [12, 16, 14, 20]
      echo "<p>".moyenne([12, 16, 14, 20])."</p>";
      //Utiliser la fonction avec: [11, 17, 15, 19, 12]
      echo "<p>".moyenne([11, 17, 15, 19, 12])."</p>";
      
    ?>
    <div>
      <h3>Exemple Return table de mutliplication</h3>

      <?php
        function tableMulttiplication($nombre){
          $phrase = "";
          for($i = 0; $i <= 10; $i++){
            $phrase = $phrase . "<p>$i x $nombre =" . $i * $nombre . '</p>';
          }
          return'<div style="border:2px solid black;">' . $phrase . '</div>';
        }

        echo tableMulttiplication(7);
        echo tableMulttiplication(8);
      ?>
    </div>
  </section>

  <section>
    <h3>Paramètres optionnels</h3>

    <?php
      function salutUser($nom="Doe", $prenom="John"){
        return "<p>Salut $nom $prenom</p>";
      }
      echo salutUser("Djemai", "Samy");
      echo salutUser();
    ?>
  </section>

  <section>
    <h3>La passage de reference</h3>
    <?php
      $nombreOeufs = 0;

      function incremente(&$nombre){
        $nombre = $nombre + 1;
      }

      incremente($nombreOeufs);

      echo $nombreOeufs;

      //En utilisant les fonctions avec réf, créer une fonction pour permuter la valeur de deux variables
      $a = 1;
      $b = 2;

      function permut(&$element1, &$element2){
        $temp = $element1;
        $element1 = $element2;
        $element2 = $temp;
      }

      permut($a, $b);
      echo '<p>a = '.$a.'</p>';
      echo '<p>b = '.$b.'</p>';

      $c = "1";
      $d = "1";
      var_dump($c === $d)
    ?>
  </section>

  <script>
    let a = "1";
    let b = "1";
    let x = 1;
    let c = new String("1");
    let d = new String("1");

    let user1 = {
      nom:"sam"
    }
    let user2 = {
      nom:"sam"
    }
    console.log(user1 == user2)

    console.log(user1 == user2);
  </script>

</body>
</html>

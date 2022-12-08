<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les blocs structurels</title>
</head>
<body>
    <?php
      include "./composants/navbar.php";
    ?>
  <h1>Les blocs structurels</h1>
  <section>
    <h2>Les conditions:</h2>
    <div>
      <h3>if...else</h3>
      <?php
        $isMajeur =  true;
        $isPermis = false;

        if($isMajeur && $isPermis){
          echo '<p>Vous pouvez conduire!</p>';
        }else{
          echo '<p>Vous ne pouvez pas conduire!</p>';
        }
        
      ?>
    </div>

    <div>
      <h3>Opérateur ternaire:</h3>
      <?php
          echo $isMajeur && $isPermis ? '<p>Vous pouvez conduire!</p>' : '<p>Vous ne pouvez pas conduire!</p>';
      ?>
    </div>

    <div>
      <h3>Exercice:</h3>

      <?php
        $age = 16;
        $inscrit = false;
        if($inscrit && $age >= 18){
            echo 'Utilisateur inscrit et majeur';
        }
        if($inscrit && $age < 18){
          echo 'Utilisateur inscrit et mineur';
        }
        if(!$inscrit){
          echo 'Utilisateur non inscrit, accès refusé';
        }
      ?>

      <?php
        if($inscrit){
          if($age >= 18){
            echo 'Utilisateur inscrit et majeur';
          }else{
            echo 'Utilisateur inscrit et mineur';
          }
        }else{
          echo 'Utilisateur non inscrit, accès refusé';
        }
      ?>

    <?php
      if($inscrit && $age >= 18){
        echo 'Utilisateur inscrit et majeur';
      }else if($inscrit && $age < 18){
          echo 'Utilisateur inscrit et mineur';
      }else{
        echo 'Utilisateur non inscrit, accès refusé';
      }
    ?>
    </div>

    <div>
      <h2>Exercice 2</h2>
      <?php
      $nmbrUnite =  170;
      // (plage 0 et 50): 45 : 45 * 3.5 = 157.5
      // (plage 50 et 150): 120: 50 * 3.5 + (120 - 50) * 4 = 455
      // (plage 150 et 250): 220: 50 * 3.5 + 100 * 4 + (220 - 100 - 50) * 5.2
      // (plage +250): 270: 50 * 3.5 + 100 * 4 + (100) * 5.2 + (270 - 100 - 100 - 50) * 6.5
      $prixPalier1 = 3.5;
      $palier1 = 50;

      $prixPalier2 = 4;
      $palier2 = 150;

      $prixPalier3 = 5.2;
      $palier3 = 250;

      $prixPalier4 = 6.5;

      if($nmbrUnite <=$palier1){
        echo '<p>facture = '.($nmbrUnite * $prixPalier1).'</p>';
      }if($nmbrUnite <= $palier2){
        echo '<p>facture = '.(50 * $prixPalier1 + ($nmbrUnite -50) *$prixPalier2).'</p>';
      }if($nmbrUnite <= $palier3){
        echo '<p>facture = '.(50 * $prixPalier1 + 100 * $prixPalier2 +($nmbrUnite - 100 - 50) * $prixPalier3).'</p>';
      }else{
        echo '<p>facture = '.(50 * $prixPalier1 + 100 * $prixPalier2 + 100 * $prixPalier3 + ($nmbrUnite - 100 - 100 - 50) * $prixPalier4).'</p>';
      }
      ?>
    </div>
  
    <div>
      <h3>Switch... case</h3>
      <?php
        $day = date('w');

        $dateComplete = date("d")."/".date("m")."/".date('y');
        echo "<p>$dateComplete</p>";

        echo date('c');
        switch($day){
          case 0:
            echo '<p>On est Dimanche</p>';
            break;
          case 1:
            echo '<p>On est Lundi</p>';
            break;
          case 2:
            echo '<p>On est Mardi</p>';
            break;
          case 3:
            echo '<p>On est Mercredi</p>';
            break;
          case 4:
            echo '<p>On est Jeudi</p>';
            break;
          case 5:
          case 6:
            echo '<p>On est le week-end</p>';
            break;
          default:
          echo '<p>Ce n\'est pas un jour!</p>';
        }

        $unAge = 15;
        switch($unAge){
          case 6:
          case 7:
            echo '<p>Poussin</p>';
            break;
          case 8:
          case 9:
            echo '<p>Pupille</p>';
            break;
          case 10:
          case 11:
            echo '<p>Minime</p>';
            break;
          default:
            echo $unAge < 6 ? "Vous etes trop jeune" : "Cadet";
        }
      ?>
    </div>
  </section>
  
  <section>
    <h2>Les boucles</h2>

    <div>
      <h3>la boucle for</h3>
      <?php
        //Utiliser une boucle for, pour afficher les nombres pair entre 0 et 10.
        for( $i = 0; $i <= 10; $i += 2){
          echo "<p>$i</p>";
        }

        for($i = 0; $i <= 10; $i++){
          if($i % 2 == 0){
            echo "<p>$i</p>";
          }
        }
      ?>
    </div>

    <div>
      <h3>Boucle while</h3>
      <?php

        $compteur = 0;
        while($compteur <= 10){
          echo "<p>$compteur</p>";
          $compteur  += 2;
        }
        
        echo "<p>le compteur apres la boucle est a $compteur</p>";
      ?>
    </div>

    <div>
      <h3>Boucle do...while</h3>
      <?php
        do{
          echo "<p>Dans la boucle do....while $compteur</p>";
          $compteur  += 2;
        }
        while($compteur <= 10);
        echo "<p>le compteur apres la boucle est a $compteur</p>";
      ?>
    </div>
  </section>

  <section>
    <h2>Les tableaux</h2>
    <?php
      $cours = ['HTML', 'CSS', 'Javascript', "Mysql", 'React'];
      var_dump($cours);

      echo "<p>$cours[1]</p>";

      echo '<p>count '.count($cours).'</p>';

      array_push($cours, "PHP", "Symfony");

      var_dump($cours);

      // Exercice:
      // Utiliser une boucle for pour afficher tout les éléments du tableau cours dans un paragraphe.

      for($i = 0; $i < count($cours); $i++){
        echo '<p>'.$cours[$i].'</p>';
      }

      foreach($cours as $cle => $valeur){
        echo '<p>Cours n° '.$cle." : ".$valeur.'</p>';
      }
    ?>
  </section>

  <section>
    <h2>tableaux associatifs</h2>
    <?php
      $cours = ['cours1' => 'HTML', 'cours2' => "CSS", 'cours3' => 'Javascript'];
      var_dump($cours);

      echo '<p>'.$cours['cours2'].'</p>';

      foreach($cours as $key => $value){
        echo '<p>'.$key." : ".$value.'</p>';
      }

      $user = ['prenom' => 'Samy', 'nom' => 'Djemai', 'age' => 29];
      
      echo '<p>Bienvenue, '.$user['prenom']." ".$user[1].'</p>';

      $users = [
        ['prenom' => 'John', 'nom' => 'Doe'],
        ['prenom' => 'Harry', 'nom' => 'Potter'],
        ['prenom' => 'Fred', 'nom' => 'Wesley'],
      ];

      //Exercice:
      //Utiliser une boucle sur users pour afficher:
      
      //Bonjour, Doe John
      //Bonjour, Potter Harry 
      //Bonjour, Wesley Fred
      
      //Solution 1
      foreach ($users as $key => $value) {
        echo '<p>Bienvenue, ' . $value["prenom"] . " " . $value['nom'] . '</p>';
      }

      //Solution 2
      for($i=0; $i<count($users); $i+=1){
        echo '<p>Bienvenue, '.$users[$i]['nom'].' '. $users[$i]['prenom'] . '</p>';
      }

    ?>
  </section>

  <section>
    <h2>Exercice somme des carrés</h2>
    <?php

    // 1² + 2² + ... + 20²
    $i=1;
    $phrase = "";
    while ($i <= 20) {
      $phrase = $phrase . "+ $i".'²';
      $i++;
    }

    echo "<p>$phrase</p>";


    // 1² + 2² ... + 20²
    $compt = 1;
    $result = 0;
    while($compt <= 20){
      $result = $result + $compt**2;
      $compt++;
    }

    echo "<p>Resultat de: $phrase = $result</p>";
    ?>
  </section>
</body>
</html>
</div>
 
<script>
  // let nombre;

  // do{
  //   nombre = prompt("Veuillez entrer un nombre")
  // }while(isNaN(nombre));

  let users=[
    {nom:"Djemai", prenom:"Samy"},
    {nom:"Djemai", prenom:"Samy"},
  ]

  users.forEach((value, key)=>{})

</script>


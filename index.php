<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les variables</title>
</head>
<body>
  <?php
    include "./composants/navbar.php";
  ?>
  <h1>Les variables:</h1>
  
  <?php
    $maVariable = 'Une chaine de caractères';
    echo $maVariable;
  ?>

  <section>
    <h2>Les chaines de caratères</h2>
    <?php
      // On peut utiliser une variable déclarée plus haut
      echo $maVariable;

      //Déclaration de la variabme 'nom' avec la valeur Djemai
      $nom = "Djemai";
      
      //Ecriture avec echo de la concaténation de chaines de caracères:
      echo '<p>Bonjour, ' . $nom . '</p>';

      //Excercice:
      //1. Déclarer une variable nommée prenom avec la valeur 'Samy'.
      $prenom = 'Samy';
      
      //2. utiliser la concaténation pour écrire: <h2>Bonjour, Djemai Samy, comment allez-vous?</h2>
      $phrase = '<h2>Bonjour, ' . $nom.' '.$prenom.', comment allez vous?</h2>';

      echo $phrase;
    ?>

  <?php
    $guillemetSimpleOp = '<p>Bonjour, ' . (1 + 1) . ' ' . $prenom . '</p>';
    
    $guillemetSimple = '<p>Bonjour,' . $nom . ' ' . $prenom . '</p>';
    $doubleGuillemets = "<p>Bonjour, $nom $prenom</p>";
  
  
  ?>

    <?php echo $guillemetSimple ?>
    <?= $guillemetSimple ?>
    
    <?= $doubleGuillemets ?>
  </section>

  <section>
    <h2>Les Numbers</h2>
    <?php
    $age = 28;
    $pi = 3.14;

    //Fonction native qui affiche la ligne de l'execution et le type de la variable donnée
    var_dump($pi);
    echo "Votre age est: ".$age;
    echo '<br/>';
    echo "Votre age est: ".$age;

    //Opérations mathématiques

    echo '<p>age + pi = '.($age + $pi).'</p>';
    echo '<p>age - pi = '.($age - $pi).'</p>';
    echo '<p>age / pi = '.($age / $pi).'</p>';
    echo '<p>age x pi = '.($age * $pi).'</p>';
    echo '<p>age puissance 2 = '.($age ** 2).'</p>';

    echo '<p>'.++$age.'</p>';
    echo '<p>'.$age.'</p>';

    //Affectation de valeur
    $age = 34;

    //Ces deux ligne sont equivalentes
    $age = $age + 10;
    echo '<p>'.$age.'</p>';
    
    $age += 10;
    echo '<p>'.$age.'</p>';


    //Exercice 2:
    // On a des variables:
    $noteFr = 12;
    $noteMath = 17;
    $noteInfo = 13;
    $notePhysique = 15;

    //Calculer la moyenne des notes et afficher: Votre moyenne est de 'moyenne':
    $moy = ($noteFr + $noteMath + $noteInfo + $notePhysique) /4;
    echo $moy;
    ?>

  </section>

  <section>
    <h2>Les booleans</h2>
    <?php
     $isMajeur = true;
     $isPermis = false;

     //Inverser un boolean
     $îsNotmajeur = !$isMajeur;
     //Les opérateurs logique:
     //ET:
     var_dump($isMajeur && $isPermis);
     // true et true  = true
     // true et false  = false
     // false et true  = false
     // false et false  = false

     //OU:
     var_dump($isMajeur || $isPermis);
     // true ou true  = true
     // true ou false  = true
     // false ou true  = true
     // false ou false  = false

     //XOR
     var_dump($isMajeur xor $isPermis);
     var_dump(($isMajeur == true && $isPermis == false) || ($isMajeur == false && $isPermis == true));
     var_dump(($isMajeur && !$isPermis) || (!$isMajeur && $isPermis));
     
     // true xor true  = false
     // true xor false  = true
     // false xor true  = true
     // false xor false  = false 
    ?>
  </section>
  
</body>
</html>
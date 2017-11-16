<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>


<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=weatherapp;chartset=utf8', 'user', 'user');
}
catch(PDOException $e){
  die('Erreur : '.$e->getMessage()."</br>");
}
foreach($bdd->query('SELECT * from meteo') as $row) {
  echo $row['ville'].' '.$row['min'].' '.$row['max'];
  echo '<br>';
}
$maville=$_POST['ville'];
$mamin=$_POST['min'];
$mamax=$_POST['max'];
// $ajout = query('INSERT INTO meteo (`ville`, `max`, `min`) VALUES ("'$maville'","'$mamax'","'$mamin'") ;');
// echo $ajout;
// CA MARCHE PAS PUTAIN J'EN AI MARRE DE CE LANGUAGE DE MERDE!!!
// syntaxe pas bonne voir : https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/ecrire-des-donnees-2

?>

<body>
  <br>
  <form class="ajout" action="index.php" method="post">
    <label for="ville">Ajoutez la météo de votre ville : </label><input type="text" name="ville" value="Ville"><input type="text" name="min" value="Minima"><input type="text" name="max" value="Maxima"></br>
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>

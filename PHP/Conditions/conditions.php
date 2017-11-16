<form name="inscription" method="post" action="conditions.php">
  Entrez votre age : <input type="text" name="age"/><br/>
  Entrez votre genre (homme/femme/man/woman): <input type="text" name="sexe"/><br/>
  Entrez votre langue (français/english): <input type="text" name="language"/><br/>
  Entrez vos points /20 : <input type="text" name="points"/><br/>
  <input type="submit" name="valider" value="OK"/>
</form>

<?php
//Exo 0.0
echo "<h3>Exo 0.0</h3></br>";
$temperature = 22;
$vetement_du_jour = "";

if( $temperature >= 15 ) {
  // code à exécuter si la condition est TRUE
  $vetement_du_jour = "T-shirt";
 } else {
   // code à exécuter si la condition est FALSE
   $vetement_du_jour = "Pull-over";
 }
 echo "température = ",$temperature, "</br>";
 echo "vêtement du jour = ",$vetement_du_jour, "</br>";

//Exo 0.1
echo "<h3>Exo 0.1</h3></br>";
$ChambreDegoutante = true;
$ChambreSale = false;
$ChambreOrdre = false;
$ChambreImmacule = false;
$ChambreManiaque = false;
if($ChambreDegoutante == true) {
  echo "RANGE TA CHAMBRE SALE GOSSE! </br>";
} else if ($ChambreSale == true){
  echo "TU POURRAIS FAIRE UN EFFORT ON DIRAIT QUE LE MONT CHAUSSETTES SALES VA S'EFFONDRER!</br>";
} else if ($ChambreOrdre == true){
  echo "BRAVO Fils De Prout TA CHAMBRE EST RANGEE?! TU VEUX UNE GOMETTE? </br>";
} else if ($ChambreImmacule == true){
  echo "AH BAH ENFIN, MAIS TU POURRAIS AU MOINS JETER LES MOUCHOIRS PRES DE TON LIT!</br>";
} else if ($ChambreManiaque == true){
  echo "heu tu fais peur Thimothée... Tu pourrais mettre un peu de poussière par là...</br>";
}

//Exo 1
echo "<h3>Exo 1</h3></br>";
$hour = 4;
if ($hour > 5 and $hour <= 9){
  echo "Bonjour!</br>";
} else if ($hour >= 9 and $hour <= 12){
  echo "Bonne journée!</br>";
} else if ($hour > 12 and $hour <= 16){
  echo "Bon après-midi!</br>";
} else if ($hour > 16 and $hour <= 21){
  echo "Bonne soirée!</br>";
} else if (($hour > 21 and $hour <= 24) or ($hour >= 0 and $hour <= 5)){
  echo "Bonne nuit!</br>";
}

//Exo 2, 3 et 4
echo "<h3>Exo 2, 3 et 4</h3></br>";
$sexe= $_POST['sexe'];
$age = $_POST['age'];
$language = $_POST['language'];
if ($language == "français") {
  if ($age < 12 and $sexe == "homme"){
    echo "Salut petit!";
  } else if ($age < 12 and $sexe == "femme"){
      echo "Salut petite!";
  } else if (($age >= 12 and $age <= 18) and $sexe == "homme"){
    echo "Salut l'adolescent!";
  } else if (($age >= 12 and $age <= 18) and $sexe == "femme"){
    echo "Salut l'adolescente!";
  } else if (($age >= 18 and $age <= 115) and $sexe == "homme"){
    echo "Salut l'adulte!";
  } else if (($age >= 18 and $age <= 115) and $sexe == "femme"){
    echo "Salut l'adulte!";
  } else if ($age > 115 and $sexe == "homme"){
    echo "Wow! Toujours vivant?";
  } else if ($age > 115 and $sexe == "femme"){
    echo "Wow! Toujours vivante?";
  }
} else if ($language == "english"){
  if ($age < 12 and $sexe == "man"){
    echo "Hello boy!";
  } else if ($age < 12 and $sexe == "woman"){
      echo "Hello girl!";
  } else if (($age >= 12 and $age <= 18) and $sexe == "man"){
    echo "Hello teenage boyyy!";
  } else if (($age >= 12 and $age <= 18) and $sexe == "woman"){
    echo "Hello teenage gurl!";
  } else if (($age >= 18 and $age <= 115) and $sexe == "man"){
    echo "Hello Sir!";
  } else if (($age >= 18 and $age <= 115) and $sexe == "woman"){
    echo "Hello Lady!";
  } else if ($age > 115 and $sexe == "man"){
    echo "Wow! Still alive old man?";
  } else if ($age > 115 and $sexe == "woman"){
    echo "Wow! Still alive old lady?";
  }
}


//Exo 5
echo "<h3>Exo 5</h3></br>";
$points = $_POST['points'];
if ($points >= 1 and $points <= 5){
  echo "Ce travail est nul!</br>";
} else if ($points > 5 and $points <= 9){
  echo "Ce travail n'est pas terrible!</br>";
} else if ($points == 10){
  echo "Tout juste!</br>";
} else if ($points > 10 and $points <= 14){
  echo "C'est pas mal!</br>";
} else if ($points > 14 and $points <= 18){
  echo "Bravo!</br>";
} else if ($points > 18){
  echo "Police! Arrêtez ce tricheur!</br>";
} else if ($points == 0){
  echo "ZERO POINTÉ!</br>";
}

// Exo 6
echo "<h3>Exo 6</h3></br>";
echo '<a href="conditions-switch.php">clique ici!</a></br>';

// Exo 7 et 8
echo "<h3>Exo 7 et 8</h3></br>";
$selec = "Désolé, vous ne remplissez pas les critères de sélection.";
if (($sexe=="femme" or $sexe=="woman")and($age>=21 and $age<=40)){
  $selec = "Bonjour, bienvenue parmi nous!";
}
echo $selec;

// Exo 9
echo "<h3>Exo 9? Qui à parlé d'exo 9? On passe au 10 direct!</h3></br>";
$bonjour = ($sexe == "femme")? true : false;
if ($bonjour == true){
  echo "bonjour madame.";
} else {
  echo "bonjour monsieur.";
}
// j'ai pas compris comment afficher la valeur autrement que par une autre condition???
 ?>

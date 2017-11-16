<?php
$name = $_POST['name'];
$prof = $_POST['prof'];
$excuse = $_POST['excuse'];
$genre = $_POST['genre'];
$politesse = $_POST['politesse'];
$signature = $_POST['signature'];
$genretxt ="";
$excusetxt = "";
$politessetxt = "";

//genre du prof
if ($genre==1){
  $genretxt = "Madame";
} else if ($genre==2){
  $genretxt = "Monsieur";
}

// excuses
if ($excuse==1){
  $excusetxt = "ne sera pas présent aujourd'hui pour cause de maladie.";
} elseif ($excuse==2) {
  $excusetxt = "ne sera pas présent aujourd'hui car nous venons de perdre un être chère.";
} elseif ($excuse==3) {
  $excusetxt = "ne sera pas présent aujourd'hui car il a des activitées plus intéressantes que d'aller à l'école.";
} elseif ($excuse==4) {
  $excusetxt = "ne sera pas présent aujourd'hui pour raisons personnelles.";
}

//formule de politesse
if ($politesse == 1){
  $politessetxt = "Veuillez agréer mes sincères salutations, ";
}

//date
$date = (new DateTime())->format('d m Y');
echo "Écrit le : ",$date,".</br>";

//message d'excuse
echo "Bonjour, ",$genretxt," ",$prof,".<br>Mon enfant ",$name,", ",$excusetxt,"</br>",$politessetxt,"</br>",$signature;
 ?>
<body>
  <form name="excuses" method="post" action="excuses.php">
    Entrez le nom de l'enfant : <input type="text" name="name"/><br/>
    Entrez le nom du prof : <input type="radio" name="genre" value="1" id="genre1"/><label for="genre1">Mme.</label><input type="radio" name="genre" value="2" id="genre2"/><label for="genre2">M.</label><input type="text" name="prof"/><br/>
    Entrez une raison d'absence : <input type="radio" name="excuse" value="1" id="raison1"/><label for="raison1">Maladie</label>
    <input type="radio" name="excuse" value="2" id="raison2"/><label for="raison2">décès de l'animal de compagnie (ou d'un membre de la famille)</label>
    <input type="radio" name="excuse" value="3" id="raison3"/><label for="raison3">activité extra-scolaire importante</label>
    <input type="radio" name="excuse" value="4" id="raison4"/><label for="raison4">autre</label><br/>
    Ajouter une formule de politesse : <input type="radio" name="politesse" value="1" id="true"/><label for="politesse">Avec</label>
    <input type="radio" name="politesse" value="2"/>Sans</br>
    votre signature : <input type="text" name="signature"/>
    <input type="submit" name="excuses" value="OK"/>
  </form>
</body>

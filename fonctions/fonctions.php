<form class="" action="fonctions.php" method="post">
  <input type="text" name="getmot"/></br>
  <input type="submit" name="valider" value="OK"/></br>
</form>
<?php
//exo 1 : first letter
$mot = $_POST["getmot"];
maj();
function maj(){
  global $mot;
  echo ucfirst($mot),"</br>";
}

//exo 2 et 3 : date et heure
$date = date("D d M Y");
$hour = date("hA i");
echo $date,"</br>",$hour,"</br>";

//exo 4 et 5 : Somme
$a = 42;
$b = 31;
function somme(){
  global $a, $b;
  $numerica = is_numeric($a);
  $numericb = is_numeric($b);
  if ($numerica == false or $numericb == false){
    echo "Erreur, argument non numérique";
  } else if ($numerica == true and $numericb == true){
    echo $a + $b;
  } else {
    echo "what?!";
  }
}
somme();
//exo 6 :
?>

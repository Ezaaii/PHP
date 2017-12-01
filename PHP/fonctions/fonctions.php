<form class="" action="fonctions.php" method="post">
  entrez un mot : <input type="text" name="getmot"/></br>
  entre un rayon (exo 14) : <input type="text" name="getrayon"/></br>
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
    echo "Erreur, argument non numérique</br>";
  } else if ($numerica == true and $numericb == true){
    echo $a + $b, "</br>";
  } else {
    echo "what?!</br>";
  }
}
somme();
//exo 6 :
$string = "in code we trust";
function initialD($str) {
    $ret = '';
    foreach (explode(' ', $str) as $word)
        $ret .= strtoupper($word[0]);
    return $ret;
}
echo initialD($string),"</br>";
//exo 7 :
$search = ["ae"];
$replace = str_replace ( $search , "æ" , "caecotrophie, chaenichthys, microsphaera, sphaerotheca");
echo $replace,"</br>";
//exo 8 :
$search2 = ["æ"];
$replace2 = str_replace ( $search2 , "ae" , "cæcotrophie, chænichthys, microsphæra, sphærotheca");
echo $replace2,"</br>";
//exo 10 et 11:
//j'ai pas compris la demande... '-'

//exo 12 :
echo "<h3>Machine à mot, appuyez sur le bouton</h3>";
function generateRandomString($length = 10) {
    $characters = 'abcdefijlmnoprsuv';//j'ai enlevé quelque lettres moins utilisées en fr, sinon c'est un peu comme jouer au scrabble version allemand...
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo generateRandomString(),"</br>";
echo "<a href='fonctions.php'>NOUVEAU MOT</a></br>";

//exo 13 :
$cessedecrier = strtolower("ARRETE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
echo $cessedecrier,"</br>";

//exo 14 :
$rayon = $_POST["getrayon"];
$volume = $rayon * $rayon * 3.14 * 2 * (1/3);
echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';

//exo gm 1
$stringToReverse = "j'aime mon chat.";
$reverse = strrev($stringToReverse);
echo $reverse,"</br>";
//exo gm 2
$lawallonieestbourrée = ["a","e","i","o","u","y"];
$substitutions =  ["E", "I", "O", "U", "OU", "É", "È", "OI", "UI", "OUI", "AN", "IN", "ON", "UN", "OIN"];
$replace3 = str_replace ( $lawallonieestbourrée , $substitutions , "Buvons un coup ma serpette est perdue, Mais le manche, mais le manche, Buvons un coup ma serpette est perdue Mais le manche est revenu.");
echo $replace3,"</br>";
?>

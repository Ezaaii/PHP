<?php
//bon j'ai pas trop pigé le but de l'exo mais j'vais essayer un truc.
//bref c'est tout bête j'ai juste mis une fonction qui va vérifier si la check box est cochée ou non.
class Validator{
  function valid(){
    global $NoRobot;
    global $prenom;
    global $nom;
    $prenom = "Bobby";
    $nom = "Brian";
    $NoRobot = $_POST['NoRobot'];
    if ($NoRobot = 1){
      echo "Bienvenue ",$prenom," ",$nom;
    } else if ($NoRobot = 0){
      echo "dégage de là le robot, on aime pas trop les gens dans vot' genre par chez nous!";
    } else {
      echo "error";
    }
  }
}
global $NoRobot;
$valid = new Validator();
echo $valid -> valid($NoRobot);
 ?>
<form class="" action="exo3.html" method="post">
<input type="checkbox" name="NoRobot">
<input type="submit" value="submit">
</form>

<?php
class Voiture{
  function voiture(){
    $immat;
    $date;
    $km;
    $model;
    $brand;
    $color;
    $weight;
  }
  function reserved(){
    $reserved = true;
    if ($reserved == true){
      echo "reserved";
    } else if ($reserved == false){
      echo "free";
    }
  }
  function utility(){
    global $weight;
    if ($weight <= 3499) {
      echo "Vehicule utilitaire";
    } else if ($weight >= 3500){
      echo "Vehicule commercial";
    } else {
      echo "Erreur, mauvais poids";
    }
  }
  function pays(){
    global $immat;
    $im = substr($immat, 2);
    if ($im == "BE"){
      echo "Belgique";
    } else if ($im == "FR"){
      echo "France";
    } else if ($im=="DE"){
      echo "Deutsch";
    } else {
      echo "inconnu";
    }
  }
}
$audi= new Voiture();
$audi-> $model = "audi";
$
 ?>

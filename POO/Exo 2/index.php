<?php
class Voiture{
    private $immat;
    private $date;
    public $km;
    public $newkm;
    public $model;
    private $brand;
    public $color;
    public $weight;
    public $reserved;
  function reserved(){
    $this->reserved = true;
    if ($reserved == true){
      echo "reserved";
    } else if ($reserved == false){
      echo "free";
    }
  }
  function utility(){
    $this->weight=3000;
    if ($weight <= 3499) {
      echo "Vehicule utilitaire";
    } else if ($weight >= 3500){
      echo "Vehicule commercial";
    } else {
      echo "Erreur, mauvais poids";
    }
  }
  function pays(){
    $this->immat="BE 045 BGS";
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
  function usage(){
    $this->km=80000;
    if ($this->km<=100000){
      echo "low";
    } else if ($this->km>100000 and $this->km<=200000){
      echo "middle";
    } else if ($this->km>200000){
      echo "high";
    }
  }
  function age(){
    $this->date=2000;
    echo $this-> date(Y) - $date;
  }
  function drive(){
    $this->km=160000;
    $newkm = $this->km + 100000;
    echo $newkm," km";
    global $newkm;
  }
  function newusage(){
    global $newkm;
    if ($newkm<=100000){
      echo "low";
    } else if ($newkm>100000 and $newkm<=200000){
      echo "middle";
    } else if ($newkm>200000){
      echo "high";
    }
  }
}
$audi = new Voiture();
$audi->model = "audi";
echo $audi->model;
echo '</br>';
echo $audi->km = 80000," km";
echo '</br>';
echo $audi->usage();
echo '</br>';
echo $audi->drive();
echo '</br>';
echo $audi->newusage();

//ok i give up...
//stupid language...
 ?>

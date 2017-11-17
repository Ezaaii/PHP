<?php
class Form{
  public $nom = $_POST["nom"];
  public $prenom = $_POST["prenom"];
  public create($action,$methode){
    return "<form action='{$action}' method='{$methode}'>";
  }

  public function end(){
    return "</form>";
  }
}
$form = new Form();
 ?>

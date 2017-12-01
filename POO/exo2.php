<?php
//class html qui va contenir toutes les fonctions pour construire une page html
class html{
  //chaque fonction renvoie un lien prédéfini dans une variable(changeable si utilisé avec $_POST)
  function head(){
    $style = "main.css";
    echo "<head>";
    echo "<link rel='stylesheet' href=",$style,">"; //Lier des Fichiers CSS
    echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />"; //Créer des Balises meta
    echo "</head>";
  }
  function img($img){
    //Lier des Images
    $img = "https://scontent.fbru2-1.fna.fbcdn.net/v/t1.0-9/14650352_1264388196945957_3720008054755249327_n.jpg?oh=1563c1f82a067b7ee84bba234bb099bc&oe=5AC95109";
    echo "<img src=",$img,"> </br>";
  }
  function link($link){
    //Créer des Liens
    $link = "https://www.facebook.com/ezouille";
    echo "<a href=",$link,">link</a> </br>";
  }
  function script($script){
    //Lier des Fichiers Javascript
    $script = "app.js";
    echo "<script src=",$script,"></script>";
  }
}
//ici on rappelle toutes les variables hors class
global $img;
global $link;
global $style;
global $script;
//et puis on echo tout ce joli monde
$html = new html();
echo $html -> head($style);
echo $html -> img($img);
echo $html -> link($link);
echo $html -> script($script)
 ?>

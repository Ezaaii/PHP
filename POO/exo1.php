<!-- EXO 1 POO -->
<?php
class Form{
  //on ouvre la class formulaire
  function construct(){ //la fonction construct est là pour construire les balises de formulaires
    //on appelle les variables
    global $nom;
    global $prenom;
    global $text;
    $text = $_POST['text'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    //on echo le formulaire
    echo "<form action='exo1.php' method='post'>";
    echo "nom : <input type='text' name='nom' value=''/>";
    echo "prenom : <input type='text' name='prenom' value=''/>";
    echo "</br>";
    echo "<select name='test2'>";
    echo "<option value='test1'>homme</option>";
    echo "<option value='test2'>femme</option>";
    echo "<option value='test3'>autre</option>";
    echo "</select>";
    echo "</br>";
    echo "</br>";
    echo "<textarea name='text' rows='8' cols='80'></textarea>";
    echo "</br>";
    echo "Pensez vous que le lion est mort ce soir?";
    echo "<input type='radio' name='ahoui' value='ahoui'> Ah oui!";
    echo "<input type='radio' name='mbaweh' value='mbaweh'> Mbawéh.";
    echo "</br>";
    echo "je ne suis pas un robot";
    echo "<input type='checkbox' name='' value=''>";
    echo "<input type='submit' name='submit' value='submit'/>";
    echo "</form>";
  }
  function submit(){ //on echo une phrase pour dire que le formulaire à été rempli avec les infos entrées.
    global $nom;
    global $prenom;
    global $text;
    echo "<h2>bonjour ",$prenom," ",$nom,".</h2>",$text;
  }
}
//on rappelle les variables en global hors class.
global $nom;
global $prenom;
$form = new Form();
//Et on echo les ptites fonctions.
echo $form->construct($nom,$prenom);
echo $form->submit('Modifier');
 ?>

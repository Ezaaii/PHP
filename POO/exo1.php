<!-- EXO 1 POO -->
<?php
class Form{
  function construct(){
    global $nom;
    global $prenom;
    global $text;
    $text = $_POST['text'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
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
  function submit(){
    global $nom;
    global $prenom;
    global $text;
    echo "<h2>bonjour ",$prenom," ",$nom,".</h2>",$text;
  }
}
global $nom;
global $prenom;
$form = new Form();

echo $form->construct($nom,$prenom);
echo $form->submit('Modifier');
 ?>

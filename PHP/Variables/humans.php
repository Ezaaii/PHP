<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Bonjour !</h1><?php echo $_GET['nom'];
    $prenom = "Nicolas";
    $age = 23;
    $faim = "j'ai faim";
    $yeux = "bleu";
    $famille=array('Lucienne','Christophe','Tanya','Caroline','Cécile','Annie','Amalia',7=>'Zoé');
    echo "prénom = ", $prenom;
    echo "</br>";
    echo "age = ", $age;
    echo "</br>";
    echo "faim = ", $faim;
    echo "</br>";
    echo "yeux = ", $yeux;
    echo "</br>";
    echo "famille = ", $famille[1];
    echo "</br>";
    ?>
  </body>
</html>

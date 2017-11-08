<?php
//boucle foreach
$verbe = "cod";
$conjuguaisonER=["e","es","e","ons","ez","ent"];
$pronoms_personnels=[
  'je','tu','elle/il','nous','vous','elles/ils'
];
foreach ($pronoms_personnels as $index => $n) {
  echo $n," ",$verbe,$conjuguaisonER[$index],"<br>";
};
$num = 1;
//boucle while
echo "<h3>boucle while</h3><br>";
while ($num <= 120){
  echo $num;
  $num++;
}
//boucle for
echo "<h3>boucle for</h3><br>";
for ($num2 = 1; $num2<=120;$num2++){
  echo $num2;
}
//boucler les gens
$classe = [
  "Gaetan","Syl","Valérian","Mehdi","Weich","Ornella","Marie-Ange","Axel","Laureen","Vincent","Ilias","Marvin","Thomas","Kevin","Kevin S","Antoine","Nico B","Caro","Steve","Delphine","les autres"
];
$classelen = count($classe);
for ($i=0;$i<$classelen;$i++){
  echo $classe[$i],"<br>";
}
//select box c nul!

 ?>

<?php
//tableaux
$famille = ["Caro", "Chris", "Cécile"];
print_r($famille);
echo "</br>";
$plats = ["sushis", "pain", "pancakes"];
print_r($plats);
echo "</br>";
$films = ["wakfu", "Les chroniques de Riddick", "adventure time"];
print_r($films[1]);
echo "</br>";
//tableaux associatifs
$moi = [
  "prénom" => "Nicolas",
  "nom" => "Van Roost",
  "ville" => "Ottignies",
  "age" => 23,
  "aime_le_pain" => true,
  "hobbies" => [
    "jeux vidéo", "dessin", "animation"
  ],
  "papa" => $papa
];
//tableau multi-dimensionnels
echo $moi["prénom"];
$papa = [
  "prénom" => "Christophe",
  "nom" => "Van Roost",
  "ville" => "Jodoigne",
  "age" => 54,
  "hobbies" => [
    "dressage de chiens", "vol en avion", "treck en montagne"
  ],
];
//manipulation d'arrays
array_push($moi["hobbies"],"Taxidermie");
$moi["nom"]="Dieudonné";
echo "<pre>";
print_r($moi);
echo "</pre>";
$resultmoi = count($moi["hobbies"]);
$resultpapa = count($papa["hobbies"]);
echo $resultpapa," + ", $resultmoi," = ",$resultmoi+$resultpapa,"<br>";
//créer un tableau avec deux arrays
$ame_soeur = [
  "prénom" => "Zoé",
  "nom" => "Naniot",
  "ville" => "Vedrin",
  "age" => 22,
  "hobbies" => [
    "Cosplay", "Mangas", "jeux vidéo", "dessin"
  ],
];

$toi = array_intersect($moi["hobbies"], $ame_soeur["hobbies"]);
print_r(array_intersect($moi["hobbies"], $ame_soeur["hobbies"]));
echo "<br>";
print_r(array_combine($moi["hobbies"], $ame_soeur["hobbies"]));
//suite
$web_development = [
  "frontend" => [],
  "backend" => []
];
echo "<pre>";
print_r($web_development);
echo "</pre>";
array_push($web_development["frontend"], "xhtml");
echo "<pre>";
print_r($web_development);
echo "</pre>";
array_push($web_development["backend"], "Ruby on Rails");
echo "<pre>";
print_r($web_development);
echo "</pre>";
array_push($web_development["frontend"], "CSS");
echo "<pre>";
print_r($web_development);
echo "</pre>";
array_push($web_development["frontend"], "flash");
echo "<pre>";
print_r($web_development);
echo "</pre>";
array_push($web_development["backend"], "JavaScript");
echo "<pre>";
print_r($web_development);
echo "</pre>";
$web_development["frontend"][0]="html";
echo "<pre>";
print_r($web_development);
echo "</pre>";
array_pop($web_development["frontend"]);
echo "<pre>";
print_r($web_development);
echo "</pre>";
?>

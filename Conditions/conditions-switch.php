<form name="inscription" method="post" action="conditions-switch.php">
  <input type="text" name="points"/>/20</br>
  <input type="submit" name="valider" value="OK"/>
</form>
<?php
$points = $_POST['points'];
switch ($points) {
  case 0:
    echo "le pire travail du monde!</br>";
    break;
  case 1:
  case 2:
  case 3:
  case 4:
    echo "t'es nul!</br>";
    break;
  case 5:
  case 6:
  case 7:
  case 8:
  case 9:
    echo "pas mal... loser!</br>";
    break;
  case 10:
    echo "tout pile!</br>";
    break;
  case 11:
  case 12:
    echo "meh peux mieux faire!</br>";
    break;
  case 13:
  case 14:
  case 15:
  case 16:
  case 17:
  case 18:
    echo "bon travail!</br>";
    break;
  case 19:
  case 20:
    echo "t'as triché avoue!</br>";
    break;
}
echo '<a href="conditions.php">back</a></br>'
?>

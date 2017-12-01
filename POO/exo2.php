<?php
class html{
  function img($img){
    $img;
    $img = "https://scontent.fbru2-1.fna.fbcdn.net/v/t1.0-9/14650352_1264388196945957_3720008054755249327_n.jpg?oh=1563c1f82a067b7ee84bba234bb099bc&oe=5AC95109";
    echo "<img src=",$img,"> </br>";
  }
  function link($link){
    $link;
    $link = "https://www.facebook.com/ezouille";
    echo "<a href=",$link,">link</a> </br>";
  }
}
global $img;
global $link;
$html = new html();
echo $html -> img($img);
echo $html -> link($link);
 ?>

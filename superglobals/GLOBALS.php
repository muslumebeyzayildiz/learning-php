<?php

//$GLOBALS, PHP betiğindeki herhangi bir yerden (ayrıca işlevler veya yöntemler içinden) global değişkenlere erişmek için kullanılan bir PHP süper global değişkenidir.
//PHP, tüm global değişkenleri $GLOBALS[ index ] adlı bir dizide saklar . İndeks , değişkenin adını tutar .


$x = 75;
$y = 25; 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
//100


//z $GLOBALS dizisinde bulunan bir değişken olduğundan, fonksiyonun dışından da erişilebilir!




?>




































<?php
$x = 1;
//////////////WHİLE
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
//$x = 1; - Döngü sayacını ($x) başlatın ve başlangıç ​​değerini 1 olarak ayarlayın
//$x <= 5 - $x, 5'ten küçük veya ona eşit olduğu sürece döngüye devam edin
//$x++; - Her yineleme için döngü sayacı değerini 1 artırın



$x = 1;
////////////////////DO WHİLE
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
/*
The number is: 1
The number is: 2
The number is: 3
The number is: 4
The number is: 5*/

$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
//The number is: 6
// Bir do...whiledöngüde koşul, döngü içindeki ifadeler yürütüldükten SONRA test edilir. Bu do...while, koşul yanlış olsa bile döngünün ifadelerini en az bir kez çalıştıracağı anlamına gelir.



?>
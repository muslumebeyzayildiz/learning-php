Geri Arama Fonksiyonları
Geri arama işlevi (genellikle yalnızca "geri arama" olarak anılır) başka bir işleve bağımsız değişken olarak iletilen bir işlevdir.
Mevcut herhangi bir işlev, bir geri arama işlevi olarak kullanılabilir. Bir işlevi geri çağırma işlevi olarak kullanmak için, başka bir işlevin bağımsız değişkeni olarak işlevin adını içeren bir dize iletin:
array_map()Bir dizideki her dizenin uzunluğunu hesaplamak için PHP'nin işlevine bir geri arama iletin:

<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

Sürüm 7'den itibaren PHP, anonim işlevleri geri çağırma işlevleri olarak iletebilir:
PHP'nin işlevi için geri arama olarak anonim bir işlev kullanın array_map():

<?php
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>

Kullanıcı Tanımlı Fonksiyonlarda Geri Aramalar
Kullanıcı tanımlı işlevler ve yöntemler ayrıca geri arama işlevlerini argüman olarak alabilir. Kullanıcı tanımlı bir işlev veya yöntem içinde geri çağırma işlevlerini kullanmak için, değişkene parantez ekleyerek onu çağırın ve normal işlevlerde olduğu gibi argümanları iletin:
Kullanıcı tanımlı bir işlevden bir geri arama çalıştırın:

<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>
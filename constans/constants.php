<?php

//Constants  bir kez tanımlandıklarında değiştirilememeleri veya tanımlanmamaları dışında değişkenler gibidir.
/*define(name, value, case-insensitive)

name : Sabitin adını belirtir
value : Sabitin değerini belirtir
case-insensitive : Sabit adının büyük/küçük harfe duyarlı olup olmayacağını belirtir. Varsayılan yanlış
*/

define("GREETING", "Welcome to W3Schools.com!", true);
echo GREETING;


define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];

//cıktısı Alfa Romeo

?>
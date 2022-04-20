<?php

//STRING

$x = "Hello world!"; //tek veya cift tırnak olabilir.
$y = 'Hello world!';//metindir

echo $x;
echo "<br>";
echo $y."<br>";

//INTEGER

/*Bir tamsayı en az bir basamak içermelidir
Bir tamsayının ondalık noktası olmamalıdır
Bir tamsayı pozitif veya negatif olabilir*/

$x = 5985;
var_dump($x) ;
echo"<br>";
//cıktısı int(5985)
//var_dump fonksiyonu bir değişkenin içeriğini ve türünü öğrenmek için kullanılır. 

//FLOAT
$x = 5.4;
var_dump($x);
echo"<br>";
//boole
$x = true;
$y = false;
/*Boole değerleri genellikle koşullu testlerde kullanılır.
Bu öğreticinin sonraki bir bölümünde koşullu test hakkında daha fazla bilgi edineceksiniz.*/


//ARRAY
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo"<br>";

//NULL
/*NULL veri türündeki bir değişken, kendisine atanmış bir değeri olmayan bir değişkendir.
İpucu: Bir değişken değeri olmadan oluşturulursa, buna otomatik olarak NULL değeri atanır.
Değişkenler, değeri NULL olarak ayarlayarak da boşaltılabilir.*/

$x = "Hello world!";
$x = null;
var_dump($x);


?>
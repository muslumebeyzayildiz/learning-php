<?php

echo strlen("Hello world!"); // php de strlen()işlevi, bir dizenin uzunluğunu döndürür.cıktı  12

echo str_word_count("Hello world!");//PHP str_word_count()işlevi, bir dizedeki sözcük sayısını sayar. cıktı 2

echo strrev("Hello world!"); // cıktı ayna gibi !dlrow olleH  PHP strrev()işlevi bir dizeyi tersine çevirir.

echo strpos("Hello world!", "world"); // cıktı 6
echo strpos("Hello world!", "aaaa"); // cıktı yok
//PHP strpos()işlevi, bir dize içinde belirli bir metni arar. Bir eşleşme bulunursa, işlev ilk eşleşmenin karakter konumunu döndürür. Eşleşme bulunamazsa, YANLIŞ döndürür.

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
//PHP str_replace()işlevi, bir dizgedeki bazı karakterleri diğer bazı karakterlerle değiştirir.


$x = 59.85;
var_dump(is_int($x));
$x = 10.365;
var_dump(is_float($x));
$x = 1.9e411;
var_dump($x);// float(INF)  is_finite(sonlu demek)   is_infinite(sonsuz demek)

$x = acos(8);
var_dump($x);
//float(NAN)
//NaN, imkansız matematiksel işlemler için kullanılır.
//PHP, bir değerin sayı olup olmadığını kontrol etmek için aşağıdaki işlevlere sahiptir: is_nan()



$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));



/*bool(true)
bool(true)
bool(true)
bool(false)
PHP is_numeric() işlevi, bir değişkenin sayısal olup olmadığını bulmak için kullanılabilir. Değişken bir sayı veya sayısal bir dize ise işlev true, aksi takdirde false döndürür.*/


$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

//sayısal bir değeri başka bir veri türüne dönüştürmeniz 





?>
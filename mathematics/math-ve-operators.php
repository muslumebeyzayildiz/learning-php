<?php
$sayi1 = 11;
$sayi2 = 200;
$degisken = "koku";

echo("degiskenin  veri tipi: ".gettype($degisken)."<br>");
echo("sayının  veri tipi: ".gettype($sayi1));

$toplam= $sayi1 + $sayi2;
$fark=$sayi1-$sayi2;
$bolum=$sayi2/$sayi1;
$carpım=$sayi1*$sayi2;
$kalan=$sayi2 % $sayi2;
echo ("$toplam $fark $bolum $carpım $kalan");


$sayi1=$sayi1 + 10; 
$sayi2+= 60; 

echo ("sayi1 yeni deger $sayi1 <br> sayi2 yeni deger $sayi2  ");


$sayi3=25;

echo "sayının karekökü : ".sqrt($sayi3)."<br>";//köklü alma

echo "sayının üssü : ".pow($sayi3,2)."<br>";

echo "sayının mutlak : ".abs(-9685)."<br>";
echo "en küçük sayı : ".min(5,6,2,7,9)."<br>";

echo "en büyük sayı: ".max(3,7,65,84,5)."<br>";
echo(pi()); // returns 3.1415926535898
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
echo(rand());//rastgele bir sayı
echo(rand(10, 100));//10 ile 100 (dahil) arasında rastgele bir tamsayı 
?>
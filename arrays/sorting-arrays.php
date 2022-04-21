
<?php
// Diziler İçin İşlevleri Sırala
// Bu bölümde, aşağıdaki PHP dizi sıralama fonksiyonlarını inceleyeceğiz:

// sort()- dizileri artan düzende sıralayın
// rsort()- dizileri azalan düzende sıralayın
// asort()- ilişkisel dizileri değere göre artan düzende sıralayın
// ksort()- anahtara göre ilişkisel dizileri artan düzende sıralayın
// arsort()- ilişkisel dizileri değere göre azalan düzende sıralayın
// krsort()- ilişkisel dizileri anahtara göre azalan düzende sıralayın

SORT
/* $cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
echo $cars[$x];
echo "<br>";
}*/ 

// BMW
// Toyota          sort() $cars dizisinin öğelerini artan alfabetik sırayla sıralar:
// Volvo


/*
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}*/ 

//2
//4
//6      $numbers dizisinin öğelerini artan sayısal düzende sıralar:
//11
//22



rsort()
/*Diziyi Azalan Düzende Sırala - rsort()


$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}*/

//Volvo
//Toyota      $cars dizisinin öğelerini azalan alfabetik sırayla sıralar:
//BMW






/*$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}*/

// 22
// 11
// 6      $numbers dizisinin öğelerini azalan sayısal düzende sıralar:
// 4
// 2


asort()

/*$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


Key=Peter, Value=35
Key=Ben, Value=37          bir ilişkisel diziyi değere göre artan düzende sıralar:
Key=Joe, Value=43*/



ksort()

/*$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

Key=Ben, Value=37
Key=Joe, Value=43 bir ilişkisel diziyi anahtara göre artan düzende sıralar:
Key=Peter, Value=35*/

arsort()

/*$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

Key=Joe, Value=43
Key=Ben, Value=37        bir ilişkisel diziyi değere göre azalan düzende sıralar:   
Key=Peter, Value=35*/


krsort()


/*$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

Key=Peter, Value=35
Key=Joe, Value=43        bir ilişkisel diziyi anahtara göre azalan düzende sıralar:
Key=Ben, Value=37*/

















?>





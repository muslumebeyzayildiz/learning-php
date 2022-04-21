<?php


// İlişkili diziler, onlara atadığınız adlandırılmış anahtarları kullanan dizilerdir.

// İlişkisel dizi oluşturmanın iki yolu vardır: 

// 1       $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");veya:

// 2       $age['Peter'] = "35";
//         $age['Ben'] = "37";
//         $age['Joe'] = "43";
// Adlandırılmış anahtarlar daha sonra bir komut dosyasında kullanılabilir:


// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.";

$age = array("peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $key => $val){
echo"key=".$key.",  value".$val;
echo"<br>";

}

?>
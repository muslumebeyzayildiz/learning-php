<?php


/*foreach ($array as $value) {
  code to be executed;
}
Her döngü yinelemesi için, geçerli dizi öğesinin değeri $değerine atanır ve dizi işaretçisi, son dizi öğesine ulaşana kadar bir adım hareket ettirilir.
*/


$mevsim= array('ilkbahar', 'yaz', 'sonbahar', 'kış');
 
foreach( $mevsim as $m ) {

   echo $m.'<br>';
}

//ilkbahar
//sonbahar
//yaz
//kış

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

/*Peter = 35
Ben = 37
Joe = 43*/

$padisah['Adı'] = 'Fatih sultan mehmet';

$padisah['Görevi'] = 'Ülke yönetme';

$padisah['Başarısı'] = 'İstanbul fethi';

foreach($padisah as $isim => $deger) {

   echo $isim . ' : ' . $deger . ' <br>';
   
}


?>









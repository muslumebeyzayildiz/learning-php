<?php
$ciro = 47000;


switch($ciro){
 case $ciro<=7000:
 echo "Bursa Uludağ'da 2 Gün tatil";
 break;


 case $ciro<=50000:
 echo "Ekiple lüx bir restoranda akşam yemeği";
 break;
 
 case $ciro<=4000:
 echo "Herkese 200'er lira ikramiye";


 case $ciro <=3000:
 echo "Maalesef etkinlik hakkı kazanamadınız.";
 break;
 default:
 echo "Deneme";
  }  

//İfadenin değeri daha sonra yapıdaki her durum için değerlerle karşılaştırılır. Bir eşleşme varsa, bu durumla ilişkili kod bloğu yürütülür. breakKodun bir sonraki duruma otomatik olarak girmesini önlemek için kullanın . Eşleşme defaultbulunamazsa deyim kullanılır.



  /*
  $ay = "ocak";
  switch($ay){
      case $ay == "ocak":    
         echo "Ocak Ayındasınız";
      break;
      case $ay == "şubat":
         echo "Şubat Ayındasınız";
      break;
      case $ay == "mart":
         echo "Mart Ayındasınız";
      break;
          case $ay == "nisan":
         echo "Nisan Ayındasınız";
      break;
          case $ay == "mayıs":
         echo "Mayıs Ayındasınız";
      break;
          case $ay == "haziran":
         echo "Haziran Ayındasınız";
      break;
          case $ay == "temmuz":
         echo "Temmuz Ayındasınız";
      break;
          case $ay == "ağustos":
         echo "Ağustos Ayındasınız";
      break;
          case $ay == "eylül":
         echo "Eylül Ayındasınız";
      break;
          case $ay == "ekim":
         echo "Ekim Ayındasınız";
      break;
          case $ay == "kasım":
         echo "Kasım Ayındasınız";
      break;
          case $ay == "aralık":
         echo "Aralık Ayındasınız";
      break;
      default:
          echo "Girilen Değer ($ay) Bir Ay Değildir";
  }
*/



 ?>
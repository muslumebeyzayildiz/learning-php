<?php 
// $_SERVER
// $_SERVER, başlıklar, yollar ve komut dosyası konumları hakkında bilgi tutan bir PHP süper global değişkenidir.

// Aşağıdaki örnek, $_SERVER içindeki bazı öğelerin nasıl kullanılacağını gösterir:


echo $_SERVER['PHP_SELF']; //calısmakta olan betiğin belge kök dizinine görevli dosya adıdır.
//learning-php/superglobals/_SERVER.php
echo "<br>";
echo $_SERVER['SERVER_NAME'];//geçerli betiğin altında calıstığı sunucunun ıp adresi
//localhost
echo "<br>";
echo $_SERVER['HTTP_HOST'];//mevcut istekten host başlığı döndürür
//localhost
echo "<br>";
echo $_SERVER['HTTP_REFERER'];//geçerli sayfanın tam url sini döndürür (tüm kullanıcı aracıları desteklemediği için güvenilir değildie)
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];//tarayıcı
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];











?>


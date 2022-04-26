<!-- Çerez nedir?
Bir kullanıcıyı tanımlamak için genellikle bir çerez kullanılır. Çerez, sunucunun kullanıcının bilgisayarına yerleştirdiği küçük bir dosyadır. Aynı bilgisayar tarayıcılı bir sayfa istediğinde, çerezi de gönderir. PHP ile tanımlama bilgisi değerlerini hem oluşturabilir hem de alabilirsiniz.

PHP ile Çerezler Oluşturun
İşlev ile bir çerez oluşturulur setcookie().
setcookie(name, value, expire, path, domain, secure, httponly);
Yalnızca name parametresi gereklidir. Diğer tüm parametreler isteğe bağlıdır. -->

////PHP Bir Çerez Oluştur/Geri Al
Aşağıdaki örnek, "John Doe" değerine sahip "user" adında bir tanımlama bilgisi oluşturur. Çerez, 30 gün sonra (86400 * 30) sona erecektir. "/", çerezin tüm web sitesinde mevcut olduğu anlamına gelir (aksi takdirde, tercih ettiğiniz dizini seçin).

Daha sonra "user" çerezinin değerini alırız ($_COOKIE global değişkenini kullanarak). isset()Bu işlevi, çerezin ayarlanıp ayarlanmadığını öğrenmek için de kullanırız :

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

Not: İşlevsetcookie(), <html> etiketinden ÖNCE görünmelidir.
Not: Tanımlama bilgisinin değeri, tanımlama bilgisi gönderilirken otomatik olarak URL olarak kodlanır ve alındığında otomatik olarak kodu çözülür (URL kodlamasını önlemek için setrawcookie()bunun yerine kullanın).


/////Bir Çerez Değerini Değiştirin
Bir tanımlama bilgisini değiştirmek için, şu setcookie()işlevi kullanarak tanımlama bilgisini (tekrar) ayarlayın:

<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>


////Çerez Sil
Bir tanımlama bilgisini silmek için setcookie(), geçmişte sona erme tarihi olan işlevi kullanın:

<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>

/////Çerezlerin Etkin olup olmadığını kontrol edin
Aşağıdaki örnek, tanımlama bilgilerinin etkinleştirilip etkinleştirilmediğini kontrol eden küçük bir komut dosyası oluşturur. İlk olarak, işlevle bir test tanımlama bilgisi oluşturmaya çalışın setcookie(), ardından $_COOKIE dizi değişkenini sayın:

<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html>
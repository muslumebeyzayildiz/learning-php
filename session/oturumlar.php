<!-- Oturum, birden çok sayfada kullanılacak bilgileri (değişkenlerde) depolamanın bir yoludur.
Bir çerezden farklı olarak, bilgiler kullanıcının bilgisayarında saklanmaz.

////PHP Oturumu nedir?
Bir uygulama ile çalışırken onu açarsınız, bazı değişiklikler yaparsınız ve ardından kapatırsınız. Bu, bir Oturuma çok benzer. Bilgisayar kim olduğunu biliyor. Uygulamayı ne zaman başlattığınızı ve ne zaman bitirdiğinizi bilir. Ancak internette bir sorun var: HTTP adresi durumu korumadığı için web sunucusu kim olduğunuzu veya ne yaptığınızı bilmiyor.
Oturum değişkenleri, birden çok sayfada kullanılacak kullanıcı bilgilerini (örneğin kullanıcı adı, favori renk, vb.) depolayarak bu sorunu çözer. Varsayılan olarak, oturum değişkenleri kullanıcı tarayıcıyı kapatana kadar sürer.
Böyle; Oturum değişkenleri, tek bir kullanıcı hakkında bilgi tutar ve tek bir uygulamada tüm sayfalarda bulunur.
İpucu: Kalıcı bir depolamaya ihtiyacınız varsa, verileri bir veritabanında depolamak isteyebilirsiniz .

///PHP Oturumu Başlatın
Fonksiyonla bir oturum başlatılır session_start().
Oturum değişkenleri PHP global değişkeni ile ayarlanır: $_SESSION.
Şimdi "demo_session1.php" adında yeni bir sayfa oluşturalım. Bu sayfada yeni bir PHP oturumu başlatıyoruz ve bazı oturum değişkenleri ayarlıyoruz: -->

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>
Not: İşlevsession_start(), belgenizdeki ilk şey olmalıdır. Herhangi bir HTML etiketinden önce.

<!-- ////PHP Oturum Değişken Değerlerini Alın
Ardından "demo_session2.php" adında başka bir sayfa oluşturuyoruz. Bu sayfadan ilk sayfada belirlediğimiz oturum bilgilerine ("demo_session1.php") ulaşacağız.
Oturum değişkenlerinin her yeni sayfaya ayrı ayrı geçirilmediğine, bunun yerine her sayfanın başında açtığımız oturumdan alındığına dikkat edin ( session_start()).
Ayrıca tüm oturum değişkeni değerlerinin global $_SESSION değişkeninde saklandığına dikkat edin: -->


<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>
Bir kullanıcı oturumu için tüm oturum değişkeni değerlerini göstermenin başka bir yolu da aşağıdaki kodu çalıştırmaktır:

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>

</body>
</html>
O nasıl çalışır? Ben olduğumu nereden biliyor?
Çoğu oturum, kullanıcının bilgisayarında şuna benzeyen bir kullanıcı anahtarı ayarlar: 765487cf34ert8dede5a562e4f3a7e12. Ardından, başka bir sayfada bir oturum açıldığında, bilgisayarı bir kullanıcı anahtarı için tarar. Bir eşleşme varsa o oturuma girer, değilse yeni bir oturum başlatır.

/////PHP Oturum Değişkenini Değiştirin
Bir oturum değişkenini değiştirmek için üzerine yazmanız yeterlidir:

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>

////Bir PHP Oturumunu Yok Edin
Tüm genel oturum değişkenlerini kaldırmak ve oturumu yok etmek için session_unset() ve kullanın session_destroy():

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>

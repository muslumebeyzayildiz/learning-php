
<!-- PHP formlarını işlerken GÜVENLİK düşünün!
Bu sayfalar, PHP formlarının güvenlik göz önünde bulundurularak nasıl işleneceğini gösterecektir. Form verilerinin doğru şekilde doğrulanması, formunuzu bilgisayar korsanlarından ve spam göndericilerden korumak için önemlidir!

<!-- Ad, e-posta ve web sitesi alanları metin giriş öğeleridir ve yorum alanı bir metin alanıdır. HTML kodu şöyle görünür: -->
Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Website: <input type="text" name="website">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>


<!-- Radyo Düğmeleri
Cinsiyet alanları radyo düğmeleridir ve HTML kodu şöyle görünür: -->
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other

<!-- Form Öğesi
Formun HTML kodu şöyle görünür: -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<!-- Form gönderildiğinde, form verileri method="post" ile gönderilir. -->


<!-- $_SERVER["PHP_SELF"],
o anda yürütülmekte olan komut dosyasının dosya adını döndüren süper global bir değişkendir.
Böylece,$_SERVER["PHP_SELF"], gönderilen form verilerini farklı bir sayfaya atlamak yerine sayfanın kendisine gönderir. Bu şekilde kullanıcı, formla aynı sayfada hata mesajları alacaktır. -->


<!-- htmlspecialchars() işlevi nedir?
htmlspecialchars() işlevi, özel karakterleri HTML varlıklarına dönüştürür. Bu, < ve > gibi HTML karakterlerini < ile değiştireceği anlamına gelir. ve >. Bu, saldırganların formlara HTML veya Javascript kodu (Siteler Arası Komut Dosyası Çalıştırma saldırıları) enjekte ederek kodu kullanmasını engeller. -->



<!-- PHP Form Güvenliği Üzerine Büyük Not
$_SERVER["PHP_SELF"] değişkeni bilgisayar korsanları tarafından kullanılabilir!
Sayfanızda PHP_SELF kullanılıyorsa, kullanıcı eğik çizgi (/) girebilir ve ardından yürütmek için bazı Siteler Arası Komut Dosyası (XSS) komutları girebilir.
Siteler arası komut dosyası çalıştırma (XSS), genellikle Web uygulamalarında bulunan bir tür bilgisayar güvenlik açığıdır. XSS, saldırganların diğer kullanıcılar tarafından görüntülenen Web sayfalarına istemci tarafı komut dosyası eklemesine olanak tanır. -->




<!-- "test_form.php" adlı bir sayfada aşağıdaki formun olduğunu varsayalım:
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Şimdi, bir kullanıcı adres çubuğuna "http://www.example.com/test_form.php" gibi normal URL'yi girerse, yukarıdaki kod şuna çevrilecektir:
<form method="post" action="test_form.php">
Çok uzak çok iyi.
Ancak, bir kullanıcının adres çubuğuna aşağıdaki URL'yi girdiğini düşünün:
http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
Bu durumda, yukarıdaki kod şu dile çevrilecektir:
<form method="post" action="test_form.php/"><script>alert('hacked')</script>
Bu kod, bir komut dosyası etiketi ve bir uyarı komutu ekler. Ve sayfa yüklendiğinde JavaScript kodu yürütülür (kullanıcı bir uyarı kutusu görür). Bu PHP_SELF değişkeninden nasıl yararlanılabileceğine dair basit ve zararsız bir örnektir.
Herhangi bir JavaScript kodunun <script> etiketinin içine eklenebileceğini unutmayın ! Bir bilgisayar korsanı, kullanıcıyı başka bir sunucudaki bir dosyaya yönlendirebilir ve bu dosya, örneğin, kullanıcı verilerini kaydetmek için genel değişkenleri değiştirebilen veya formu başka bir adrese gönderebilen kötü amaçlı kod içerebilir. -->






<!-- $_SERVER["PHP_SELF"] İstismarlarından Nasıl Kaçınılır?
$_SERVER["PHP_SELF"] istismarlarından htmlspecialchars() işlevi kullanılarak kaçınılabilir.

Form kodu şöyle görünmelidir:
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
htmlspecialchars() işlevi, özel karakterleri HTML varlıklarına dönüştürür. Şimdi, kullanıcı PHP_SELF değişkeninden yararlanmaya çalışırsa, aşağıdaki çıktıyla sonuçlanacaktır:
<form method="post" action="test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;">
İstismar girişimi başarısız olur ve hiçbir zararı olmaz!
 -->




<!-- PHP ile Form Verilerini Doğrulayın
Yapacağımız ilk şey, tüm değişkenleri PHP'nin htmlspecialchars() işlevinden geçirmek.
htmlspecialchars() fonksiyonunu kullandığımızda; o zaman bir kullanıcı aşağıdakileri bir metin alanına göndermeye çalışırsa:
<script>location.href('http://www.hacked.com')</script>
- bu yürütülmez, çünkü aşağıdaki gibi HTML çıkışlı kod olarak kaydedilir:
<script>location.href('http://www.hacked.com')</script>
Kodun bir sayfada veya e-postada görüntülenmesi artık güvenlidir.
Kullanıcı formu gönderdiğinde ayrıca iki şey daha yapacağız:
Kullanıcı giriş verilerinden gereksiz karakterleri (fazladan boşluk, sekme, yeni satır) çıkarın (PHP trim() işleviyle)
Kullanıcı giriş verilerinden ters eğik çizgileri (\) kaldırın (PHP stripslashes() işleviyle)
Bir sonraki adım, tüm kontrolleri bizim için yapacak bir fonksiyon oluşturmaktır (bu, aynı kodu tekrar tekrar yazmaktan çok daha uygundur).
Test_input() fonksiyonunu isimlendireceğiz.
Şimdi, test_input() işleviyle her bir $_POST değişkenini kontrol edebiliriz ve komut dosyası şöyle görünür:

Misal -->

<!-- <!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html> -->

<!-- Komut dosyasının başlangıcında, formun $_SERVER["REQUEST_METHOD"] kullanılarak gönderilip gönderilmediğini kontrol ettiğimize dikkat edin. REQUEST_METHOD POST ise, form gönderildi - ve doğrulanması gerekiyor. Gönderilmediyse, doğrulamayı atlayın ve boş bir form görüntüleyin.
Ancak yukarıdaki örnekte tüm giriş alanları isteğe bağlıdır. Kullanıcı herhangi bir veri girmese bile komut dosyası düzgün çalışır.
Sonraki adım, gerekli girdi alanlarını yapmak ve gerekirse hata mesajları oluşturmaktır. -->
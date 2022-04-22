<!DOCTYPE HTML>
<html>  
<body>

<form action="bilgigelenpost.php" method="post"><!-- gonderilen bilgilerin gideceği yer action="" arasında olan yer -->
Name: <input type="text" name="isim"><br>
E-mail: <input type="text" name="emailiniz"><br>
<input type="submit">
</form>

<!-- POST ne zaman kullanılır?
POST yöntemiyle bir formdan gönderilen bilgiler başkaları tarafından görülmez (tüm adlar/değerler HTTP isteğinin gövdesine gömülüdür) ve gönderilecek bilgi miktarında herhangi bir sınırlama yoktur .
Ayrıca POST, dosyaları sunucuya yüklerken çok parçalı ikili giriş desteği gibi gelişmiş işlevleri destekler.
Ancak değişkenler URL'de görüntülenmediği için sayfaya yer işareti koymak mümkün değildir.
Geliştiriciler, form verilerini göndermek için POST'u tercih eder. -->

</body>
</html>
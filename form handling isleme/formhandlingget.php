<html>
<body>

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<!-- GET ve POST
Hem GET hem de POST bir dizi oluşturur (ör. dizi( anahtar1 => değer1, anahtar2 => değer2, anahtar3 => değer3, ...)). Bu dizi, anahtar/değer çiftlerini tutar; burada anahtarlar, form kontrollerinin adlarıdır ve değerler, kullanıcıdan gelen girdi verileridir.
Hem GET hem de POST, $_GET ve $_POST olarak değerlendirilir. Bunlar süper küresellerdir, yani kapsamdan bağımsız olarak her zaman erişilebilir durumdadırlar - ve bunlara herhangi bir işlev, sınıf veya dosyadan özel bir şey yapmanıza gerek kalmadan erişebilirsiniz.
$_GET, URL parametreleri aracılığıyla geçerli komut dosyasına iletilen bir değişkenler dizisidir.
$_POST, HTTP POST yöntemi aracılığıyla geçerli komut dosyasına iletilen bir değişkenler dizisidir.

GET ne zaman kullanılır?
GET yöntemiyle bir formdan gönderilen bilgiler herkes tarafından görülebilir (tüm değişken adları ve değerleri URL'de görüntülenir). GET'in ayrıca gönderilecek bilgi miktarı konusunda da sınırları vardır. Sınırlama yaklaşık 2000 karakterdir. Ancak, değişkenler URL'de görüntülendiğinden, sayfaya yer işareti koymak mümkündür. Bu, bazı durumlarda faydalı olabilir.
GET, hassas olmayan verileri göndermek için kullanılabilir.
Not: GET, şifre veya diğer hassas bilgileri göndermek için ASLA kullanılmamalıdır! -->

</body>
</html>
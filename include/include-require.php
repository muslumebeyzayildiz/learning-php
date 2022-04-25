requireDosya uygulama tarafından istendiğinde kullanın .
includeDosya gerekli olmadığında kullanın ve dosya bulunamadığında uygulama devam etmelidir.


Bir PHP dosyasının içeriğini başka bir PHP dosyasına (sunucu onu çalıştırmadan önce) include veya require ifadesiyle eklemek mümkündür.
Dahil etme ve zorunlu kılma ifadeleri, başarısızlık dışında aynıdır:
requireönemli bir hata (E_COMPILE_ERROR) üretecek ve betiği durduracak
includeyalnızca bir uyarı (E_WARNING) üretecek ve komut dosyası devam edecek
Bu nedenle, içerme dosyası eksik olsa bile yürütmenin devam etmesini ve kullanıcılara çıktıyı göstermesini istiyorsanız, include ifadesini kullanın. Aksi takdirde, FrameWork, CMS veya karmaşık bir PHP uygulama kodlaması durumunda, yürütme akışına bir anahtar dosyası eklemek için her zaman gerekli ifadesini kullanın. Bu, bir anahtar dosyanın yanlışlıkla kaybolması durumunda, uygulamanızın güvenliğinden ve bütünlüğünden ödün verilmesini önlemeye yardımcı olacaktır.
Dosyaları dahil etmek çok fazla iş tasarrufu sağlar. Bu, tüm web sayfalarınız için standart bir üstbilgi, altbilgi veya menü dosyası oluşturabileceğiniz anlamına gelir. Ardından, başlığın güncellenmesi gerektiğinde, yalnızca başlık içerme dosyasını güncelleyebilirsiniz.

include 'filename';
or
require 'filename';


//////////////örnek 1
Şuna benzeyen "footer.php" adında standart bir alt bilgi dosyamız olduğunu varsayalım:

<?php
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
?>
Altbilgi dosyasını bir sayfaya dahil etmek için şu includeifadeyi kullanın:
....
<html>
<body>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>

</body>
</html>

//////////////Örnek 2
"menu.php" adında standart bir menü dosyamız olduğunu varsayalım:

<?php
echo '<a href="/default.asp">Home</a> -
<a href="/html/default.asp">HTML Tutorial</a> -
<a href="/css/default.asp">CSS Tutorial</a> -
<a href="/js/default.asp">JavaScript Tutorial</a> -
<a href="default.asp">PHP Tutorial</a>';
?>
Web sitesindeki tüm sayfalar bu menü dosyasını kullanmalıdır. Bunun nasıl yapılabileceği aşağıda açıklanmıştır (menünün daha sonra CSS ile kolayca şekillendirilebilmesi için bir <div> öğesi kullanıyoruz):

....
<html>
<body>

<div class="menu">
<?php include 'menu.php';?>
</div>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>

</body>
</html>
///////Örnek 3
Bazı değişkenlerin tanımlandığı "vars.php" adında bir dosyamız olduğunu varsayalım:

<?php
$color='red';
$car='BMW';
?>
Ardından, "vars.php" dosyasını eklersek, değişkenler çağıran dosyada kullanılabilir:

........
<html>
<body>

<h1>Welcome to my home page!</h1>
<?php include 'vars.php';
echo "I have a $color $car.";
?>

</body>
</html>


PHP dahil etme ve gerektirme
Bu requireifade aynı zamanda PHP koduna bir dosya eklemek için de kullanılır.

Ancak, içerme ve gereklilik arasında büyük bir fark vardır; ifadeye bir dosya eklendiğinde includeve PHP onu bulamadığında, komut dosyası yürütülmeye devam eder:

<html>
<body>

<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>

Aynı örneği deyimi kullanarak yaparsak, deyim önemli bir hata döndürdükten requiresonra komut dosyası yürütmesi öldüğü için echo deyimi yürütülmez :require

<html>
<body>

<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>





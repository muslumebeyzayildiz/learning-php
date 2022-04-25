///////////PHP Dosya Oluştur - fopen()
İşlev fopen()ayrıca bir dosya oluşturmak için kullanılır. Belki biraz kafa karıştırıcı, ancak PHP'de, dosyaları açmak için kullanılan işlevin aynısı kullanılarak bir dosya oluşturulur.
Var olmayan bir dosya üzerinde kullanırsanız fopen(), dosyanın yazılması (w) veya eklenmesi (a) için açılması koşuluyla onu oluşturacaktır.
Aşağıdaki örnek, "testfile.txt" adında yeni bir dosya oluşturur. Dosya, PHP kodunun bulunduğu dizinde oluşturulacaktır:

Misal
$myfile = fopen("testfile.txt", "w")

/////PHP Dosya İzinleri
Bu kodu çalıştırmaya çalışırken hata alıyorsanız, sabit sürücüye bilgi yazmak için PHP dosyanıza erişim izni verdiğinizden emin olun.

/////PHP Dosyaya Yaz - fwrite()
fwrite()Fonksiyon bir dosyaya yazmak için kullanılır .
İlk parametresi fwrite()yazılacak dosyanın adını içerir ve ikinci parametre yazılacak dizedir.
Aşağıdaki örnek, "newfile.txt" adlı yeni bir dosyaya birkaç ad yazar:

Misal
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

"newfile.txt" dosyasına iki kez yazdığımıza dikkat edin. Dosyaya her yazdığımızda, önce "John Doe" ve ikinci olarak "Jane Doe" içeren $txt dizesini gönderdik. Yazmayı bitirdikten sonra fclose()fonksiyonu kullanarak dosyayı kapattık.
"newfile.txt" dosyasını açarsak şöyle görünür:

John Doe
Jane Doe


/////////PHP Üzerine Yazma
Artık "newfile.txt" bazı verileri içerdiğine göre, mevcut bir dosyayı yazmak için açtığımızda ne olduğunu gösterebiliriz. Mevcut tüm veriler SİLİNECEK ve boş bir dosya ile başlıyoruz.
Aşağıdaki örnekte var olan "newfile.txt" dosyamızı açıyoruz ve içine yeni veriler yazıyoruz:

Misal
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

Şimdi "newfile.txt" dosyasını açarsak, hem John hem de Jane kaybolur ve yalnızca az önce yazdığımız veriler bulunur:
Mickey Mouse
Minnie Mouse
PHP Metin Ekle


"a" modunu kullanarak bir dosyaya veri ekleyebilirsiniz. "a" modu dosyanın sonuna metin eklerken "w" modu dosyanın eski içeriğini geçersiz kılar (ve siler).
Aşağıdaki örnekte mevcut dosyamızı "newfile.txt" açıyoruz ve ona bir metin ekliyoruz:

Misal
<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

Şimdi "newfile.txt" dosyasını açarsak, dosyanın sonuna Donald Duck ve Goofy Goof'un eklendiğini göreceğiz:
Mickey Mouse
Minnie Mouse
Donald Duck
Goofy Goof
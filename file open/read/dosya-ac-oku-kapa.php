<!-- Dosyaları açmak için daha iyi bir yöntem, fopen()işlevdir. Bu işlev size işlevden daha fazla seçenek sunar readfile().



Dersler sırasında "webdictionary.txt" metin dosyasını kullanacağız:
AJAX = Asynchronous JavaScript and XML
CSS = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP = PHP Hypertext Preprocessor
SQL = Structured Query Language
SVG = Scalable Vector Graphics
XML = EXtensible Markup Language


İlk parametresi fopen()açılacak dosyanın adını, ikinci parametresi ise dosyanın hangi modda açılacağını belirtir. Aşağıdaki örnek ayrıca fopen() işlevi belirtilen dosyayı açamıyorsa bir mesaj oluşturur:

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

İpucu: ve işlevleri aşağıda fread()açıklanacaktır fclose().


Modlar          Açıklama
r      Salt okunur için bir dosya açın. Dosya işaretçisi dosyanın başında başlar
w      Yalnızca yazmak için bir dosya açın. Dosyanın içeriğini siler veya yoksa yeni bir dosya oluşturur. Dosya işaretçisi dosyanın başında başlar
a      Yalnızca yazmak için bir dosya açın. Dosyadaki mevcut veriler korunur. Dosya işaretçisi dosyanın sonunda başlar. Dosya yoksa yeni bir dosya oluşturur
x      Yalnızca yazmak için yeni bir dosya oluşturur. YANLIŞ ve dosya zaten varsa bir hata döndürür
r+     Okuma/yazma için bir dosya açın. Dosya işaretçisi dosyanın başında başlar
w+     Okuma/yazma için bir dosya açın. Dosyanın içeriğini siler veya yoksa yeni bir dosya oluşturur. Dosya işaretçisi dosyanın başında başlar
a+     Okuma/yazma için bir dosya açın. Dosyadaki mevcut veriler korunur. Dosya işaretçisi dosyanın sonunda başlar. Dosya yoksa yeni bir dosya oluşturur
x+     Okuma/yazma için yeni bir dosya oluşturur. YANLIŞ ve dosya zaten varsa bir hata döndürür


///fread()
İşlev fread(), açık bir dosyadan okur.
öğesinin ilk parametresi fread()okunacak dosyanın adını içerir ve ikinci parametre okunacak maksimum bayt sayısını belirtir.
Aşağıdaki PHP kodu "webdictionary.txt" dosyasını sonuna kadar okur:

fread($myfile,filesize("webdictionary.txt"));


//////PHP Dosyayı Kapat - fclose()
İşlev fclose(), açık bir dosyayı kapatmak için kullanılır.
Tüm dosyaları bitirdikten sonra kapatmak iyi bir programlama uygulamasıdır. Sunucunuzda dolaşan açık bir dosyanın kaynakları tüketmesini istemezsiniz!
fclose()Kapatmak istediğimiz dosyanın adını (veya dosya adını tutan bir değişkeni) gerektirir :

<?php
$myfile = fopen("webdictionary.txt", "r");
// some code to be executed....
fclose($myfile);
?>



////PHP Tek Satır Okuma - fgets()
İşlev fgets(), bir dosyadan tek bir satır okumak için kullanılır.
Aşağıdaki örnek, "webdictionary.txt" dosyasının ilk satırını verir:

Misal
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
Not: İşlev çağrısından sonra fgets()dosya işaretçisi bir sonraki satıra geçmiştir.

////PHP Dosya Sonunu Kontrol Et - feof()
İşlev feof(), "dosya sonu"na (EOF) ulaşılıp ulaşılmadığını kontrol eder.
İşlev feof(), bilinmeyen uzunluktaki veriler arasında döngü yapmak için kullanışlıdır.
Aşağıdaki örnek, dosyanın sonuna ulaşılana kadar "webdictionary.txt" dosyasını satır satır okur: -->

Misal
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>


<!-- ////PHP Tek Karakter Okuma - fgetc()
İşlev fgetc(), bir dosyadan tek bir karakter okumak için kullanılır.
Aşağıdaki örnek, dosyanın sonuna ulaşılana kadar "webdictionary.txt" dosyasını karakter karakter okur:

Misal
 <?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}

fclose($myfile);
?> 
Not: İşlev çağrısından sonra fgetc()dosya işaretçisi bir sonraki karaktere geçer. -->




formatbiçim                Gerekli. Zaman damgasının biçimini belirtir
timestampzaman damgası     İsteğe bağlı. Bir zaman damgası belirtir. Varsayılan, geçerli tarih ve saattir

d - Ayın gününü temsil eder (01 - 31)
m - Bir ayı temsil eder (01 - 12)
Y - Bir yılı temsil eder (dört basamaklı)
l (küçük harf 'L') - Haftanın gününü temsil eder
Ek biçimlendirme eklemek için karakterlerin arasına "/", "." veya "-" gibi diğer karakterler de eklenebilir.

<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

</body>
</html>
///////////////////////////////
Otomatik Telif Hakkı Yılı
date()Web sitenizdeki telif hakkı yılını otomatik olarak güncellemek için işlevi kullanın :
&copy; 2010-<?php echo date("Y");?>


<!DOCTYPE html>
<html>
<body>
© 2010-<?php echo date("Y");?>
</body>
</html>

////////////
H - bir saatin 24 saatlik formatı (00 - 23)
h - Başında sıfırlar bulunan bir saatin 12 saatlik biçimi (01 - 12)
i - Başında sıfır olan dakikalar (00 - 59)
s - Başında sıfır bulunan saniyeler (00 - 59)
a - Küçük Harf Ante meridiem ve Post meridiem (am veya pm)
Aşağıdaki örnek, geçerli saati belirtilen biçimde verir:

<!DOCTYPE html>
<html>
<body>
<?php
echo "The time is " . date("h:i:sa");
?>
</body>
</html>

PHP date() işlevinin sunucunun geçerli tarihini/saatini döndüreceğini unutmayın!

////////////////
Saat Dilimi Alın
Koddan döndüğünüz saat doğru değilse, bunun nedeni sunucunuzun başka bir ülkede olması veya farklı bir saat dilimine ayarlanmış olması olabilir.
Bu nedenle, belirli bir konuma göre saatin doğru olmasına ihtiyacınız varsa, kullanmak istediğiniz saat dilimini ayarlayabilirsiniz.
Aşağıdaki örnek, saat dilimini "America/New_York" olarak ayarlar ve ardından geçerli saati belirtilen biçimde verir:


<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>
/////////////////////////////////

mktime()işlevi, bir tarih için Unix zaman damgasını döndürür. Unix zaman damgası, Unix Epoch (1 Ocak 1970 00:00:00 GMT) ile belirtilen zaman arasındaki saniye sayısını içerir.

Sözdizimi
mktime(hour, minute, second, month, day, year)
Aşağıdaki örnek, date()işlevdeki bir dizi parametreden işlevle birlikte bir tarih ve saat oluşturur mktime():

<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
/////////////////////////////
strtotime()işlevi, okunabilir bir tarih dizesini bir Unix zaman damgasına dönüştürmek için kullanılır (1 Ocak 1970 00:00:00 GMT'den bu yana geçen saniye sayısı).

Sözdizimi
strtotime(time, now)
Aşağıdaki örnek, strtotime()işlevden bir tarih ve saat oluşturur:

<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
///////// ///////////////////////
sonraki altı Cumartesi gününün tarihlerini verir:

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
////////////////////////////

4 Temmuz'a kadar olan gün sayısını verir:

<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>

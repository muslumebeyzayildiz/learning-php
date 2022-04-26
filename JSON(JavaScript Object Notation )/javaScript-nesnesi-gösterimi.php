JSON nedir?
JSON, JavaScript Object Notation anlamına gelir ve veri depolamak ve değiş tokuş etmek için bir sözdizimidir.
JSON formatı metin tabanlı bir format olduğundan, bir sunucuya ve sunucudan kolayca gönderilebilir ve herhangi bir programlama dili tarafından veri formatı olarak kullanılabilir.

//PHP ve JSON
PHP, JSON'u işlemek için bazı yerleşik işlevlere sahiptir.
İlk olarak, aşağıdaki iki fonksiyona bakacağız:
json_encode()
json_decode()
PHP - json_encode()
json_encode() işlevi , bir değeri JSON biçiminde kodlamak için kullanılır.

Bu örnek, ilişkisel bir dizinin bir JSON nesnesine nasıl kodlanacağını gösterir:
<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>



Bu örnek, dizine alınmış bir dizinin JSON dizisine nasıl kodlanacağını gösterir:
<?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>


/////PHP - json_decode()
json_decode() işlevi , bir JSON nesnesinin kodunu bir PHP nesnesine veya bir ilişkisel diziye dönüştürmek için kullanılır.
Bu örnek, JSON verilerinin kodunu bir PHP nesnesine dönüştürür:

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?>

json_decode() işlevi , varsayılan olarak bir nesne döndürür. json_decode() işlevinin ikinci bir parametresi vardır ve true olarak ayarlandığında, JSON nesnelerinin kodu, ilişkisel dizilere çözülür.
Bu örnek, JSON verilerinin kodunu bir PHP ilişkisel dizisine çözer:

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj, true));
?>

////PHP - Kodu Çözülmüş Değerlere Erişim
Bir nesneden ve bir ilişkisel diziden kodu çözülen değerlere nasıl erişileceğine ilişkin iki örnek:
Bu örnek, bir PHP nesnesinden değerlere nasıl erişileceğini gösterir:

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>



Bu örnek, bir PHP ilişkisel dizisinden değerlere nasıl erişileceğini gösterir:
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
?>

///PHP - Değerler Arasında Döngü Yapmak
Ayrıca bir foreach() döngüsü ile değerler arasında dolaşabilirsiniz:

Bu örnek, bir PHP nesnesinin değerleri arasında nasıl döngü yapılacağını gösterir:
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>

Bu örnek, bir PHP ilişkisel dizisinin değerleri arasında nasıl döngü yapılacağını gösterir:
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
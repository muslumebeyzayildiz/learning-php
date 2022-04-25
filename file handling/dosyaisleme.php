
Dosyaları manipüle ederken çok dikkatli olmalısınız.
Yanlış bir şey yaparsanız çok fazla zarar verebilirsiniz. Yaygın hatalar şunlardır: yanlış dosyayı düzenlemek, bir sabit sürücüyü çöp verilerle doldurmak ve bir dosyanın içeriğini yanlışlıkla silmek.


readfile() İşlevi

İşlev readfile()bir dosyayı okur ve onu çıktı arabelleğine yazar.

Sunucuda depolanan "webdictionary.txt" adlı bir metin dosyamız olduğunu ve şuna benzediğini varsayalım:
AJAX = Asynchronous JavaScript and XML
CSS = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP = PHP Hypertext Preprocessor
SQL = Structured Query Language
SVG = Scalable Vector Graphics
XML = EXtensible Markup Language


Dosyayı okumak ve çıktı arabelleğine yazmak için PHP kodu aşağıdaki gibidir ( readfile()işlev, başarılı olduğunda okunan bayt sayısını döndürür):


<?php
echo readfile("webdictionary.txt");
?>


İşlev readfile(), tek yapmak istediğiniz bir dosyayı açmak ve içeriğini okumaksa kullanışlıdır.

<!-- AJAX = Asynchronous JavaScript and XML CSS = Cascading Style Sheets HTML = Hyper Text Markup Language PHP = PHP Hypertext Preprocessor SQL = Structured Query Language SVG = Scalable Vector Graphics XML = EXtensible Markup Language236 -->











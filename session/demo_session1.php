<?php
// Start the session
session_start();// İşlevsession_start(), belgenizdeki ilk şey olmalıdır. Herhangi bir HTML etiketinden önce.
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo " Oturum değişkenleri ayarlandı.";
?>

</body>
</html>

//ÖNCE BİRİ CALIŞTIR SONRA İKİYİ DEĞİLSE ÇEKMİYOR.









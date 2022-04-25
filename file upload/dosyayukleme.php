
<!-- "php.ini" Dosyasını Yapılandırın
İlk olarak, PHP'nin dosya yüklemelerine izin verecek şekilde yapılandırıldığından emin olun.
file_uploads"php.ini" dosyanızda yönergeyi arayın ve Açık olarak ayarlayın:
file_uploads = On -->



///HTML Formunu Oluşturun
Ardından, kullanıcıların yüklemek istedikleri resim dosyasını seçmelerine olanak tanıyan bir HTML formu oluşturun:

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>


<!--
/////Yukarıdaki HTML formu için uyulması gereken bazı kurallar:
Formun method="post" kullandığından emin olun
Form ayrıca şu özniteliğe ihtiyaç duyar: enctype="multipart/form-data".
 Formu gönderirken hangi içerik türünün kullanılacağını belirtir.
Yukarıdaki gereksinimler olmadan dosya yükleme işlemi çalışmayacaktır.

Dikkat edilmesi gereken diğer şeyler:
<input> etiketinin type="file" özelliği, giriş kontrolünün yanında bir "Gözat" düğmesi ile giriş alanını bir dosya seçme kontrolü olarak gösterir.
Yukarıdaki form, daha sonra oluşturacağımız "upload.php" adlı bir dosyaya veri gönderir.
 -->




<!-- 
//////Yükleme Dosyası PHP Komut Dosyasını Oluşturun
"upload.php" dosyası, bir dosya yükleme kodunu içerir:


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>
PHP betiği açıkladı:

$target_dir = "uploads/" - dosyanın yerleştirileceği dizini belirtir
$target_file, yüklenecek dosyanın yolunu belirtir
$uploadOk=1 henüz kullanılmadı (daha sonra kullanılacak)
$imageFileType dosyanın dosya uzantısını tutar (küçük harfle)
Ardından, resim dosyasının gerçek bir resim mi yoksa sahte bir resim mi olduğunu kontrol edin.
Not: "upload.php" dosyasının bulunduğu dizinde "uploads" adında yeni bir dizin oluşturmanız gerekecektir. Yüklenen dosyalar oraya kaydedilecektir. -->




//////Dosyanın Zaten Var Olup Olmadığını Kontrol Edin
Şimdi bazı kısıtlamalar ekleyebiliriz.

İlk olarak, dosyanın "uploads" klasöründe olup olmadığını kontrol edeceğiz. Varsa, bir hata mesajı görüntülenir ve $uploadOk 0 olarak ayarlanır:

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


//////Dosya Boyutunu Sınırla
Yukarıdaki HTML formumuzdaki dosya giriş alanı "fileToUpload" olarak adlandırılmıştır.

Şimdi, dosyanın boyutunu kontrol etmek istiyoruz. Dosya 500 KB'den büyükse bir hata mesajı görüntülenir ve $uploadOk 0 olarak ayarlanır:

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


//////Dosya Türünü Sınırla
Aşağıdaki kod, kullanıcıların yalnızca JPG, JPEG, PNG ve GIF dosyalarını yüklemesine izin verir. Diğer tüm dosya türleri, $uploadOk'u 0'a ayarlamadan önce bir hata mesajı verir:

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}



///PHP Komut Dosyasını Yüklemeyi Tamamlayın
"upload.php" dosyasının tamamı şimdi şöyle görünür:

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
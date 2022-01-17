<?php
//Ana Veritabanı Dosyası - Veritabanı işlemlerini yapar. Sadece veritabanı genel kodlarının bulunması yeterlidir. (bağlantı, karakter, güvenlik)

$baglan = mysqli_connect("localhost","kullanici","parola");
mysqli_select_db($baglan,"ismek");
mysqli_set_charset($baglan,"utf8");

?>
<?php
//Hakkımızda Veritabanı Dosyası

function hakkimizdaSayfa() {
    global $baglan;
    $sorgu = mysqli_query($baglan,"select * from kurumsal");
    $satir = mysqli_fetch_all($sorgu,MYSQLI_ASSOC);
    return $satir;
}

?>
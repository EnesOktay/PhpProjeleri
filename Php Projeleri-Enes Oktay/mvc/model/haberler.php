<?php
//Haberler Veritabanı Dosyası

function haberTumListe() {
    global $baglan;
    $sorgu = mysqli_query($baglan,"select * from haber where durum='aktif'");
    $satir = mysqli_fetch_all($sorgu,MYSQLI_ASSOC);
    return $satir;
}

function haberDetay($kayitno) {
    global $baglan;
    $sorgu = mysqli_query($baglan,"select * from haber where id='$kayitno'");
    $satir = mysqli_fetch_all($sorgu,MYSQLI_ASSOC);
    return $satir;
}
?>
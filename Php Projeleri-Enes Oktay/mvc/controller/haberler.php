<?php
//Haberler Kontrol Dosyası

function haberListe() {
    $haberler = haberTumListe();
    icerikYazdir("haberler.php",$haberler,"liste");
}

function haberTek() {
    $kayitno = $_GET["id"];
    $haber = haberDetay($kayitno);
    icerikYazdir("haberler.php",$haber,"tek");
}

?>
<?php
//Hakkımızda Kontrol Dosyası

function hakkimizdaIcerik() {
    $icerik = hakkimizdaSayfa();
    icerikYazdir("hakkimizda.php",$icerik);
}
?>
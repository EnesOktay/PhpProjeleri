<?php
    $baglan = mysqli_connect("localhost","kullanici","parola");
    mysqli_set_charset($baglan,"utf8");
    mysqli_select_db($baglan,"ismek");

    function isimlendir($metin="") {
        $bul = array("ğ","ı","ü","ş","ö","ç","Ğ","İ","Ü","Ş","Ö","Ç"," ");
        $degistir = array("g","i","u","s","o","c","G","I","U","S","O","C","_");
        $sonuc = str_replace($bul,$degistir,$metin);
        return mb_strtolower($sonuc,"utf8");
    }
?>
<?php
    include("hesapClass.php");
    $sayi1 = $_POST["sayi1"];
    $sayi2 = $_POST["sayi2"];
    $islem = $_POST["islem"];
    
    $hesapla = new hesapMakinesi($sayi1,$sayi2,$islem);
    echo $hesapla->$islem();
?>
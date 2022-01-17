<?php
    $kullanici = $_POST["kullanici"];
    $parola = $_POST["parola"];

    if ($kullanici == "") {
        echo "<b style='color:#f00'>Kullanıcı Adı Eksik!</b>";
    } else if ($parola == "") {
        echo "<b style='color:#f00'>Parola Eksik!</b>";
    } else {
        echo "<b>$kullanici - $parola</b>";
    }
?>
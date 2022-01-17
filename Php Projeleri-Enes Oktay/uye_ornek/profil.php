<?php
    session_start();

    if ($_SESSION["kontrol1"] != sha1("flo") || $_SESSION["kontrol2"] != date("Y-m-d") || $_COOKIE["uyeno"] != "admin") {
        @header("Location:cikis.php");
        die();
    }


    echo "<b>Merhaba $_COOKIE[uyeno]!</b><br>
    Burası Şifreli Profil Alanı...<br><br>
    <a href='uye.php'>Üye Sayfası</a>
    <a href='profil.php'>Profil Sayfası</a>
    <a href='cikis.php'>Çıkış Yap</a>";
?>
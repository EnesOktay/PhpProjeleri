<?php
    session_start();

    $kullanici = htmlspecialchars($_POST["kullanici"]);
    $sifre = htmlspecialchars($_POST["sifre"]);

    if ($_POST["jeton"] != md5("flo") || strlen($kullanici)<4 || $sifre=="") {
        @header("Location:index.php");
        die();
    }

    if ($kullanici != "admin" || $sifre != "1234") {
        echo "<script>
        alert('Hatalı Kullanıcı Adı / Şifre!');
        window.location.href='index.php';
        </script>";
        die();
    }

    setcookie("uyeno","$kullanici",time()+60*60);

    $_SESSION["kontrol1"] = sha1("flo");
    $_SESSION["kontrol2"] = date("Y-m-d");


    echo "<script>window.location.href='uye.php';</script>";

?>
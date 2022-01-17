<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

    <form action="giris.php" method="post">
        Kullanıcı Adı: <input type="text" name="kullanici">
        <br>
        Şifre: <input type="password" name="sifre">
        <br><br>
        <input type="hidden" name="jeton" value="<?php echo md5("flo"); ?>">
        <input type="submit" value="Giriş Yap">
    </form>

</body>
</html>
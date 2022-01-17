<?php
    $dil = @$_GET["d"];
    if ($dil=="") {require_once("lang-tr.php");} else {require_once("lang-$dil.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body style="text-align:center">
    <select onchange="window.top.location = this.value;">
        <option value="index.php" <?php if ($dil=="") {echo "selected";} ?>>Dil Seçimi</option>
        <option value="index.php?d=tr" <?php if ($dil=="tr") {echo "selected";} ?>>Türkçe</option>
        <option value="index.php?d=en" <?php if ($dil=="en") {echo "selected";} ?>>İngilizce</option>
    </select>
    <br><br><br>
    <?=$dl_anasayfa ?> - <?=$dl_hakkimizda ?> - <?=$dl_iletisim ?>
 
</body>
</html>

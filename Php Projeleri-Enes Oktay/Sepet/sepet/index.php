<?php
    if (isset($_COOKIE["sepet"])) {
        $urunler = explode(",",$_COOKIE["sepet"]);
        $sepet = count($urunler);
    } else {
        $sepet = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alışveriş Merkezi</title>
</head>
<body>
    <h3 style="color:#900;text-align:center;padding-bottom:0px;margin-bottom:0px;">ALIŞVERİŞ MERKEZİ</h3>
    <h4 style="text-align:center;padding:0px;margin-bottom:30px;"><?php if ($sepet>0) {echo "<a href='sepet.php'>Sepete Git ($sepet)</a>";} else {echo "Sepet (0)";} ?></h4>
    <?php
        for ($i=1;$i<=10;$i++) {
            $fiyat = $i * 15;
            echo '<div style="width:25%;height:180px;float:left;margin-bottom:30px;box-sizing:border-box;padding:15px;">
            <div style="width:100%;height:180px;background:#f5f5f5;border:1px solid #e5e5e5;box-sizing:border-box;padding:5px;text-align:center;">
            <img src="urun'.$i.'.jpg" style="width:100%;height:100px;margin-bottom:10px;">
            <h4 style="margin:0px 0px 10px 0px;padding:0px;color:#900;">Ürün '.$i.' - '.$fiyat.' TL.</h4>
            <input type="number" name="adet" value="1" style="width:20%;text-align:center">
            <button onclick="window.top.location=\'islem.php?islem=ekle&urun='.$i.'&adet=1\';" style="width:70%;float:right;">Sepete Ekle</button>
            </div>
            </div>';
        }
    ?>
    <div style="clear:both"></div>
</body>
</html>

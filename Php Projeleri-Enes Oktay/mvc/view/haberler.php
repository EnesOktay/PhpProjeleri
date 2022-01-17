<?php
//Haberler Görünüm Dosyası

if ($tur=="liste") {
    foreach($veriler as $veri) {
        echo "<p><b><a href='index.php?route=haber&id=$veri[id]'>$veri[baslik]</a></b><br>$veri[icerik]</p>
        <hr>";
    }
}

else if ($tur=="tek") {
    foreach($veriler as $veri) {
        echo "<p><b>$veri[baslik]</b><br>$veri[icerik]</p>
        <p><a href='javascript:history.back(-1)'>Geri Dön</a></p>";
    }
}

?>
<?php
// Yönlendirme Dosyası - Index sayfasına gelen istekleri yönlendirir.

include_once("controller.php");

$sayfa = @$_GET["route"];

if (!empty($sayfa)) {
    switch ($sayfa) {
        case "anasayfa":
            sayfaGoster("anasayfa.php","icerikGoster");
        break;
        case "hakkimizda":
            sayfaGoster("hakkimizda.php","hakkimizdaIcerik");
        break;
        case "haberler":
            sayfaGoster("haberler.php","haberListe");
        break;
        case "haber":
            sayfaGoster("haberler.php","haberTek");
        break;
        default:
            sayfaHata("Aradığınız Sayfa Bulunamadı!");
        break;
    }
}

else {
    sayfaGoster("anasayfa.php","icerikGoster");
}

?>
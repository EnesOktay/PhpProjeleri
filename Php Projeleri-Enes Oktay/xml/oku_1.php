<?php
    $dosya = "products.xml";
    $xml = file_get_contents($dosya);

    $xmldosya = new DOMDocument("1.0","utf-8");
    $xmldosya->loadXML($xml);

    $elemanlar = $xmldosya->getElementsByTagName("item");

    /*
    echo $elemanlar[0]->getElementsByTagName("number")->item(0)->nodeValue;
    echo " / ";
    echo $elemanlar[0]->getElementsByTagName("price")->item(0)->nodeValue;
    echo " / ";
    echo $elemanlar[0]->getElementsByTagName("stock")->item(0)->nodeValue;
    echo "<br><br>";
    */

    /*
    foreach ($elemanlar as $eleman) {
        echo $eleman->getElementsByTagName("number")->item(0)->nodeValue;
        echo " / ";
        echo $eleman->getElementsByTagName("price")->item(0)->nodeValue;
        echo " / ";
        echo $eleman->getElementsByTagName("stock")->item(0)->nodeValue;
        echo "<br><br>";
    }
    */

?>
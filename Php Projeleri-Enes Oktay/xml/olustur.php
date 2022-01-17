<?php
    @header("Content-Type: application/xml");
    $xmldosya = new DOMDocument("1.0","UTF-8");
    $root = $xmldosya->createElement("root");

    //1. Eleman
    $item = $xmldosya->createElement("item");
    $item->setAttribute("id","001");
    $xmldosya->appendChild($root);
    $root->appendChild($item);
    $item->appendChild($xmldosya->createElement("number","A1234"));
    $item->appendChild($xmldosya->createElement("price","900"));
    $item->appendChild($xmldosya->createElement("stock","100"));

    //2. Eleman
    $item = $xmldosya->createElement("item");
    $item->setAttribute("id","002");
    $xmldosya->appendChild($root);
    $root->appendChild($item);
    $item->appendChild($xmldosya->createElement("number","B1234"));
    $item->appendChild($xmldosya->createElement("price","900"));
    $item->appendChild($xmldosya->createElement("stock","100"));

    //3. Eleman
    $item = $xmldosya->createElement("item");
    $item->setAttribute("ozellik1","deger1");
    $item->setAttribute("ozellik2","deger2");
    $item->setAttribute("ozellik3","deger3");
    $xmldosya->appendChild($root);
    $root->appendChild($item);
    $item->appendChild($xmldosya->createElement("number","C1234"));
    $item->appendChild($xmldosya->createElement("price","900"));
    $item->appendChild($xmldosya->createElement("stock","100"));


    
    $xmldosya->save("products.xml");
    echo $xmldosya->saveXML();
?>
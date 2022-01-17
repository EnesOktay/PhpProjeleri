<?php
    $dosya = file_get_contents("products.xml");
    $xmloku = simplexml_load_string($dosya);

    /*
    echo $xmloku->item[1]->number;
    echo " / ";
    echo $xmloku->item[1]->price;
    echo " / ";
    echo $xmloku->item[1]->stock;
    */

    foreach($xmloku->item as $item) {
        echo $item->number;
        echo " / ";
        echo $item->price;
        echo " / ";
        echo $item->stock;
        echo "<br><br>";
    }
   

?>
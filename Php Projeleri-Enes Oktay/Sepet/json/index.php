<?php
    //$ogrenciler = array("adsoyad" => "Mehmet Selçuk", "tckimlik" => "123456789");
    //$json = json_encode($ogrenciler);
    //echo $json;

    //$veri = '{"adsoyad":"Mehmet Selçuk","tckimlik":"123456789"}';
    //$json = json_decode($veri,false); echo $json->adsoyad;
    //$json = json_decode($veri,true);
    //echo $json["adsoyad"];


    //$ogrenciler = array(
    //    array("adsoyad" => "Ad Soyad 1", "tckimlik" => "11111"),
    //    array("adsoyad" => "Ad Soyad 2", "tckimlik" => "22222"),
    //    array("adsoyad" => "Ad Soyad 3", "tckimlik" => "33333")
    //);
    //$json = json_encode($ogrenciler);
    //echo $json;

    $veri = '[{"adsoyad":"Ad Soyad 1","tckimlik":"11111"},{"adsoyad":"Ad Soyad 2","tckimlik":"22222"},{"adsoyad":"Ad Soyad 3","tckimlik":"33333"}]';

    $json = json_decode($veri,false);
    echo $json[1]->adsoyad;

    //$json = json_decode($veri,true);
    //echo $json[1]["adsoyad"];

?>
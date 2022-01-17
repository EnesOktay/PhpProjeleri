<?php
    try {
        $baglan = new PDO("mysql:host=localhost;dbname=ismek;charset=utf8", "kullanici", "parola");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
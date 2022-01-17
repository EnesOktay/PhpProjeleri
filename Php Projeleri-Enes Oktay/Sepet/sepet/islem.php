<?php
    $islem=$_GET["islem"];
    $urun=$_GET["urun"];
    $adet=$_GET["adet"];

    if ($islem == "ekle") {
       
        if (isset($_COOKIE["sepet"])) {
            $sepet = $_COOKIE["sepet"].",$urun:$adet";
        } else {
            $sepet = "$urun:$adet";
        }
        
        setcookie("sepet","$sepet",time()+24*60*60);        

        echo "<script>
        window.location.href = 'index.php';
        </script>";

    }

?>
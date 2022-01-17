<?php
    session_start();
    
    setcookie("uyeno","",time()-1);
    session_destroy();

    @header("Location:index.php");

?>
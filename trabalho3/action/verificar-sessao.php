<?php
    session_start();
    if(!isset($_SESSION["id"]) or !isset($_SESSION["usuario"])){
        header('Location:..\paginas\login-page.php');
        #session_destroy();
    }
?>
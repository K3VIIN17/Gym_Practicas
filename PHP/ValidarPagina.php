<?php
session_start();
        if(!isset($_SESSION['nombre'])){
            echo "no entrar pagina";
            
            session_destroy();
            die();
        }

?>
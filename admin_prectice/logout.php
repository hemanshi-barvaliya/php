<?php

        session_start();
        setcookie('last_page','logout.php'); 
        session_destroy();
        header("Location: ./");

?>

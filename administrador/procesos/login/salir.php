<?php
date_default_timezone_set('America/Mexico_City');

    session_start();
    session_destroy();
    header("location: ../../index.php");
?>
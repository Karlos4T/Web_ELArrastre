<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    include "../../config.php";
    session_start();
    include "../back/hostconnect.php";
    $con = hostConnect();

    include "../back/functions.php";
?>
<?php
function hostConnect()
{
    $host = "localhost";
    $user = "admin";
    $key = "admin";
    $db = "elarrastre";
    
    $con = mysqli_connect($host, $user, $key, $db);
    
    if (!$con)
        die("Error de conexión: " . mysqli_connect_error());
    return $con;
}
?>
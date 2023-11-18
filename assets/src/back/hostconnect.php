<?php
function hostConnect()
{
    $host = "localhost";
    $user = "u463589001_user4t";
    $key = "8@Bcv*CSv|V";
    $db = "u463589001_elarrastre";
    
    $con = mysqli_connect($host, $user, $key, $db);
    
    if (!$con)
        die("Error de conexión: " . mysqli_connect_error());
    return $con;
}
?>
<?php
function hostConnect()
{
    $host = constant("DB_HOSTINGER_HOST");
    $user = constant("DB_HOSTINGER_USER");
    $key = constant("DB_HOSTINGER_PASSWORD");
    $db = constant("DB_HOSTINGER_DB");
    
    $con = mysqli_connect($host, $user, $key, $db);
    
    if (!$con)
        die("Error de conexión: " . mysqli_connect_error());
    return $con;
}
?>
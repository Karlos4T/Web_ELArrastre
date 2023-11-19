<?php
function hostConnect()
{
    $host = constant("DB_LOCAL_HOST");
    $user = constant("DB_LOCAL_USER");
    $key = constant("DB_LOCAL_PASSWORD");
    $db = constant("DB_LOCAL_DB");
    
    $con = mysqli_connect($host, $user, $key, $db);
    
    if (!$con)
        die("Error de conexión: " . mysqli_connect_error());
    return $con;
}
?>
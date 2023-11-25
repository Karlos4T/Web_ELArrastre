<?php
function hostConnect()
{
    $host_host = constant("DB_HOSTINGER_HOST");
    $host_user = constant("DB_HOSTINGER_USER");
    $host_key = constant("DB_HOSTINGER_PASSWORD");
    $host_db = constant("DB_HOSTINGER_DB");
    
    $local_host = constant("DB_LOCAL_HOST");
    $local_user = constant("DB_LOCAL_USER");
    $local_key = constant("DB_LOCAL_PASSWORD");
    $local_db = constant("DB_LOCAL_DB");

    $con = mysqli_connect($local_host, $local_user, $local_key, $local_db);
    if (!$con)
        $con = mysqli_connect($host_host, $host_user, $host_key, $host_db);
        if (!$con)
            die("Error de conexión: " . mysqli_connect_error());
    return $con;
}
?>
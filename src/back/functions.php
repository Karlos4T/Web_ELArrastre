<?php

function get_n_users()
{
    include "./hostconnect.php";

    $query = "SELECT COUNT(*) AS n_users FROM `names`";
    $res = mysqli_query($con, $query);

    if ($res)
        return ("$res");
}
?>
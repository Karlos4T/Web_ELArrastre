<?php
    include "./hostconnect.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if ($con){
            foreach ($_POST as $key => $name)
            {
                if (!empty($name)){
                    $name = mysqli_real_escape_string($con, $name);
                    $query = "INSERT INTO `names` (`name`, `ip`) VALUES ('$name', '')";
                    $res = mysqli_query($con, $query);
                    if ($res)
                        header("Location: ../index.php");
                    else
                        echo ("Error al registrar");
                }
            }
        }
    }
?>
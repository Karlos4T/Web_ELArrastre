<?php
    include "./hostconnect.php";

    if ($con){
        $name = $_POST['name'];
        $ip = $_SERVER['HTTP_CLIENT_IP'] 
        ? : ($_SERVER['HTTP_X_FORWARDED_FOR'] 
        ? : $_SERVER['REMOTE_ADDR']);
        if (!empty($name)){
            $query = "INSERT INTO `names` (`name`, `ip`) VALUES ('$name', '$ip')";
            $res = mysqli_query($con, $query);
    
            if($res){
                header('Location: ./thanks.php');
            }
        }
        else {
            ?>
                <h1>Error al conectar con la base de datos</h1>
            <?php
        }

    }
?>
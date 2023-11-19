<?php

    include "./includes.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $con = hostconnect();

        if ($con){
            echo "Error al procesar la solicitud";

            if (isset($_POST["user_input"]))
            {
                foreach ($_POST as $key => $name)
                {
                    if (!empty($name)){
                        $name = mysqli_real_escape_string($con, $name);
                        $query = "INSERT INTO `names` (`name`, `ip`) VALUES ('$name', '')";
                        $res = mysqli_query($con, $query);
                        if ($res)
                        header("Location: ../front/?msg");
                    else
                        echo ("Error al registrar");
                    }
                }
            }
            elseif (isset($_POST["collaborator_input"]))
                post_collaborator($con, $_POST, $_FILES);
            elseif (isset($_POST["hide"]))
                hide_collaborator($con, $_POST);
            elseif (isset($_POST["show"]))
                show_collaborator($con, $_POST);
            elseif (isset($_POST["delete"]))
                hide_user($con, $_POST);
            elseif (isset($_POST["recover"]))
                show_user($con, $_POST);
            elseif (isset($_POST["update-link"]))
                update_link_collaborator($con, $_POST);
            elseif (isset($_POST["update-img"]))
                update_img_collaborator($con, $_POST, $_FILES);
            else 
                echo "Error al procesar la solicitud";
        }
        else
            echo "Error de conexión con la db";
    }
?>
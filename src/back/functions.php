<?php

function get_n_users($con)
{
    $query = "SELECT COUNT(*) AS `n_users` FROM `names` WHERE `mostrar`='1'";
    $res = mysqli_query($con, $query);
    if ($res)
        return (mysqli_fetch_array($res)[0]);
}

function post_collaborator($con, $data, $img)
{
    print_r($img);
    $name = $data["name"];
    $mail = $data["mail"];
    $message = $data["message"];
    $path = $img["img"]["name"];
    if (isset($img["img"]) && $img["img"]["error"] == 0) {
        $carpetaDestino = "../../assets/imgs/collaborators/";
        if (!file_exists($carpetaDestino)) {
            if(!mkdir($carpetaDestino, 0777, true))
                echo("\nError creating dir\n");
        }
        $nombreArchivo = basename($img["img"]["name"]);
        $rutaArchivo = $carpetaDestino . $nombreArchivo;
        echo $rutaArchivo;
        if (move_uploaded_file($img["img"]["tmp_name"], $rutaArchivo)) {
            echo "imagen subida.";
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "Por favor, selecciona una imagen.";
    }
    $query = "INSERT INTO `collaborators`(`name`, `path_img`, `mail`, `message`) VALUES ('$name','$path', '$mail', '$message')";
    $res = mysqli_query($con, $query);
    if ($res)
    {
        if(isset($_SESSION['rol']))
            header("Location: ../admin23k9sp034i2nmd-93482sf/");
        else
            header("Location: ../front/?msg_collaborator");

    }
    
}

function update_link_collaborator($con, $data)
{
    $query = "UPDATE `collaborators` SET `link`='{$data['link']}' WHERE `id` = '{$data['id']}'";
    $res = mysqli_query($con, $query);
    if ($res)
        header("Location: ../admin23k9sp034i2nmd-93482sf/");
}

function get_collaborators($con)
{
    $query = "SELECT * FROM `collaborators` WHERE `mostrar` = '1'";
    $res = mysqli_query($con, $query);

    if ($res)
        return ($res);
}

function get_users($con)
{
    $query = "SELECT `name` FROM `names`";
    $res = mysqli_query($con, $query);
    if ($res)
        return (mysqli_fetch_array($res));
}

function hide_user($con, $data)
{
    $query = "UPDATE `names` SET `mostrar`='0' WHERE `id` = '{$data['id']}'";
    $res = mysqli_query($con, $query);
    if ($res)
        header("Location: ../admin23k9sp034i2nmd-93482sf/");
}

function show_user($con, $data)
{
    $query = "UPDATE `names` SET `mostrar`='1' WHERE `id` = '{$data['id']}'";
    $res = mysqli_query($con, $query);
    if ($res)
        header("Location: ../admin23k9sp034i2nmd-93482sf/admin_data.php?users=1&intext=&order=%60id%60+DESC");
}

function hide_collaborator($con, $data)
{
    $query = "UPDATE `collaborators` SET `mostrar`='0' WHERE `id` = '{$data['id']}'";
    $res = mysqli_query($con, $query);
    if ($res)
        header("Location: ../admin23k9sp034i2nmd-93482sf/");
}

function show_collaborator($con, $data)
{
    $query = "UPDATE `collaborators` SET `mostrar`='1' WHERE `id` = '{$data['id']}'";
    $res = mysqli_query($con, $query);
    if ($res)
        header("Location: ../admin23k9sp034i2nmd-93482sf/");
}

?>
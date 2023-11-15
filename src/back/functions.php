<?php

function get_n_users($con)
{
    $query = "SELECT COUNT(*) AS `n_users` FROM `names`";
    $res = mysqli_query($con, $query);
    if ($res)
        return (mysqli_fetch_array($res)[0]);
}

function post_collaborator($con, $data, $img)
{
    print_r($img);
    $name = $data["name"];
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
            $query = "INSERT INTO `collaborators`(`name`, `path_img`) VALUES ('$name','$path')";
            $res = mysqli_query($con, $query);
            if ($res)
                header("Location: ../admin23k9sp034i2nmd-ñ93482sf/");
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "Por favor, selecciona una imagen.";
    }
    
}

function get_collaborators($con)
{
    $query = "SELECT * FROM `collaborators`";
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

?>
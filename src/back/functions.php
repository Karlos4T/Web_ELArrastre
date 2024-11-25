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
    $link = $data["link"];
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
    $query = "INSERT INTO `collaborators`(`name`, `path_img`, `mail`, `message`, `link`) VALUES ('$name','$path', '$mail', '$message', '$link')";
    $res = mysqli_query($con, $query);
    if ($res)
    {
        if(isset($_SESSION['rol']))
            header("Location: ../admin23k9sp034i2nmd-93482sf/");
        else
            header("Location: ../front/?msg_collaborator");

    }
    
}

function post_question($con, $data)
{
    $question = $data['question'];
    if (isset($data['answer']))
        $answer = $data['answer'];
    else
        $answer = '';
    $query = "INSERT INTO `Questions` (`question`, `answer`) VALUES ('$question', '$answer')";
    $res = mysqli_query($con, $query);
    if ($res)
    {
        if(isset($_SESSION['rol']))
            header("Location: ../admin23k9sp034i2nmd-93482sf/");
        else
            header("Location: ../front/?msg_question");
    }
}

function update_question($con, $data)
{
    $id = $data['id'];
    $question = $data['question'];
    if (isset($data['answer']))
        $answer = $data['answer'];
    else
        $answer = '';
    $query = "UPDATE `Questions` SET `question` = '$question', `answer` = '$answer' WHERE `id` = '$id'";
    $res = mysqli_query($con, $query);
    if ($res)
    {
        if(isset($_SESSION['rol']))
            header("Location: ../admin23k9sp034i2nmd-93482sf/");
        else
            header("Location: ../front/?msg_question");
    }
}

function update_link_collaborator($con, $data)
{
    $query = "UPDATE `collaborators` SET `link`='{$data['link']}' WHERE `id` = '{$data['id']}'";
    $res = mysqli_query($con, $query);
    if ($res)
        header("Location: ../admin23k9sp034i2nmd-93482sf/");
}

function update_img_collaborator($con, $data, $img)
{
    $path = $img["img"]["name"];
    if (isset($img["img"]) && $img["img"]["error"] == 0) {
        $carpetaDestino = "../../assets/imgs/collaborators/";
        if (!file_exists($carpetaDestino)) {
            if(!mkdir($carpetaDestino, 0777, true))
                echo("\nError creating dir\n");
        }
        $nombreArchivo = basename($img["img"]["name"]);
        $rutaArchivo = $carpetaDestino . $nombreArchivo;
        if (move_uploaded_file($img["img"]["tmp_name"], $rutaArchivo)) {
        {
            $query = "UPDATE `collaborators` SET `path_img`='$path' WHERE `id` = '{$data['id']}'";
            $res = mysqli_query($con, $query);
            if ($res)
                header("Location: ../admin23k9sp034i2nmd-93482sf/");
        }
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        echo "Por favor, selecciona una imagen.";
    }
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

function get_questions($con)
{
    $query = "SELECT `id`, `question`, `answer` FROM `Questions` WHERE `mostrar` = '1'";
    $res = mysqli_query($con, $query);
    if ($res)
        return ($res);
}

function get_all_questions($con)
{
    $query = "SELECT `id`, `question`, `answer`, `mostrar` FROM `Questions`";
    $res = mysqli_query($con, $query);
    if ($res)
        return ($res);
}

function hide_question($con, $data)
{
    $query = "UPDATE `Questions` SET `mostrar`='0' WHERE `id` = '{$data['id']}'";
    $res = mysqli_query($con, $query);
    if ($res)
        header("Location: ../admin23k9sp034i2nmd-93482sf/");
}

function show_question($con, $data)
{
    $query = "UPDATE `Questions` SET `mostrar`='1' WHERE `id` = '{$data['id']}'";
    $res = mysqli_query($con, $query);
    if ($res)
        header("Location: ../admin23k9sp034i2nmd-93482sf/");
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
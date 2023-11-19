<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST['username'] === "administrador" && $_POST['password'] === "elarrastre")
        {
            session_start();
            $_SESSION['rol'] = "admin";

            echo ($_SESSION['rol']);
            if (isset($_SESSION))
                header("Location: ../admin23k9sp034i2nmd-93482sf/admin_data.php");
        }
        else
            header("Location: ../admin23k9sp034i2nmd-93482sf/");
    }
?>
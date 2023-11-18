<?php
    include "../back/includes.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        post_collaborator($con, $_POST, $_FILES);
?>
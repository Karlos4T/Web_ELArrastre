<!DOCTYPE html>
<html lang="en">
    <?php
        include('../includes/head.php');
    ?>
<body>
    <?php
        include "../../src/includes/menu.php";
        if (isset($_GET['msg']))
            include "../../src/includes/notification.php";
        if (isset($_GET['msg_collaborator']))
            include "../../src/includes/notification_collaborator.php";
        if (isset($_GET['msg_question']))
            include "../../src/includes/notification_question.php";
    ?>
    <div id="main" class="p-0">
        <div class="row m-0 p-0 d-flex justify-content-center recive">
            <img class="col-12 p-0" src="../../assets/imgs/banner.png" alt="">
        </div>
        <div class="long-bg">
        <?php
            include "./register_default.php";
            include "./info.php";
            include "./register_colaborator.php";
        ?>
        </div>
            <?php
                include "./collaborators.php";
            ?>
        <?php
            include "./last_year.php";
        ?>
    </div>
    <script src="../../assets/js/javascript.js"></script>
</body>
</html>
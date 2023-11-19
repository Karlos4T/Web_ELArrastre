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
    ?>
    <div id="main" class="p-0">
        <div class="row m-0 p-0 d-flex justify-content-center recive">
            <img class="col-12 p-0" src="../../assets/imgs/banner.jpg" alt="">
        </div>
        <?php
            include "./register_default.php";
        ?>
        <svg xmlns="http://www.w3.org/2000/svg" style="background: #040653" viewBox="0 0 1440 320"><path fill="#ff9149" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>        <?php
            include "./register_colaborator.php";
        ?>
        <svg viewBox="0 0 1486 177" style="background: #E5EBEAff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ff9149" d="M 0 115 C 202.5 115 472.5 66 675 66 L 675 66 L 675 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ff9149" d="M 674 66 C 917.6 66 1242.4 177 1486 177 L 1486 177 L 1486 0 L 674 0 Z" stroke-width="0"></path> </svg>
        <div style="margin-top: -20px" >
            <?php
                include "./collaborators.php";
            ?>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="background: #00c05b;" viewBox="0 0 1440 320"><path fill="#E5EBEAff" fill-opacity="1" d="M0,64L80,90.7C160,117,320,171,480,186.7C640,203,800,181,960,144C1120,107,1280,53,1360,26.7L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        <?php
            include "./last_year.php";
        ?>
        <svg xmlns="http://www.w3.org/2000/svg" style="background: #00c05b" viewBox="0 0 1440 320"><path fill="#febd59" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,165.3C384,181,480,171,576,160C672,149,768,139,864,138.7C960,139,1056,149,1152,154.7C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <script src="../../assets/js/javascript.js"></script>
</body>
</html>
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
            <img class="col-12 p-0" src="../../assets/imgs/banner.jpg" alt="">
        </div>
        <?php
            include "./register_default.php";
        ?>
        <svg xmlns="http://www.w3.org/2000/svg" style="background: #040653" viewBox="0 0 1440 320"><path fill="#E5EBEAff" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <?php
            include "./info.php";
        ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff9149" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,213.3C480,224,600,224,720,213.3C840,203,960,181,1080,192C1200,203,1320,245,1380,266.7L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        <?php
            include "./register_colaborator.php";
        ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="background: #ff9149"><path fill="#E5EBEAff" fill-opacity="1" d="M0,224L60,197.3C120,171,240,117,360,112C480,107,600,149,720,176C840,203,960,213,1080,213.3C1200,213,1320,203,1380,197.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
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
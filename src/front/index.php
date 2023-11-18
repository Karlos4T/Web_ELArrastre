<!DOCTYPE html>
<html lang="en">
    <?php
        include("../../config.php");
        include(BASE_PATH.'/src/includes/head.php');
    ?>
<body>
    <?php
        include "../../src/includes/menu.php";
        if (isset($_GET['msg']))
        {
            include "../../src/includes/notification.php";
        }
    ?>
    <div id="main" class="p-0">
        <div class="col-12 d-flex justify-content-center px-md-5 recive p-5">
            <div class="d-none col-2 d-sm-flex align-items-center justify-content-center">
                <img src="../../assets/imgs/espatula.png" alt="">
            </div>
            <div class="col-12 col-md-8 p-3">
                <h1 class="text-center impact t-blue"><b>¡LA PEÑA EL ARRASTRE SE PONE EL D<b class="t-green">ELA</b>NTAL!</b></h1>
                <h4 class="text-center my-5 t-blue">
                    Únete a la 2ª edición de la <b class="t-orange">Comida Solidaria</b> contra el ELA organizada por la Peña El Arrastre en 
                    la plaza de la constitución en <b class="t-orange">Villanueva de Bogas</b> el <b class="t-orange">8 de Diciembre</b>. 
                    Por tan solo <b class="t-orange">10 euros</b>, disfruta de una deliciosa experiencia 
                    gastronómica y una alegre jornada con música y eventos mientras contribuyes a una noble causa. ¡Cada bocado cuenta para luchar 
                    contra la Esclerosis Lateral Amiotrófica (ELA)! Comparte la alegría de dar y siente 
                    el poder de hacer la diferencia. 
                    <br>
                    <br>
                    <b>¡Te esperamos con los brazos abiertos y las mesas 
                    llenas de generosidad!</b>
                </h4>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="logos-container col-5">
                        <img class="logo1 w-100" src="../../assets/imgs/Logo_AdelanteCLM.png" alt="">
                    </div>
                    <i class="fa-solid fa-x h1 t-green mx-md-5 mx-3"></i>
                    <div class="logos-container col-5">
                        <img class="logo2 w-100" src="../../assets/imgs/Logo_arrastre.png" alt="">
                    </div>
                </div>
            </div>
            <div class="d-none col-2 d-sm-flex align-items-center justify-content-center">
                <img src="../../assets/imgs/cuchillo.png" alt="">
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" ><path fill="#0D0E53ff" fill-opacity="1" d="M0,160L80,149.3C160,139,320,117,480,112C640,107,800,117,960,128C1120,139,1280,149,1360,154.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
        <div style="margin-top: -100px" id="apuntate" class="register-default">
            <div class="row w-100 ">
                <div class="col-6 p-0 d-none d-lg-block p-5">
                    <img class="w-100 m-3 h-100 img_header" src="../../assets/imgs/foto1.jpg" alt="">
                </div>    
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="p-0 my-5 p-md-5">    
                        <div class="container-text d-flex flex-column text-center align-items-center my-3">
                            <h5 class="text-light">Si ya tienes pensado venir...</h5>
                            <h2 class="text-light my-3"><b>Apúntate a tí y a tus acompañantes</b></h2>
                            <h5 class="text-light">nos ayuda a organizarlo todo :)</h5>
                            <i class="fa-solid fa-circle-down h1 text-light mt-2"></i>
                        </div>
                        <form id="registerForm" action="../back/send_data.php" method="post" class="w-100">
                            <div id="inputsContainer" class="container">
                                <div id="inputDiv0" class="d-flex">
                                    <input onkeyup="active_desactive_btn()"  id="inpt" minlength="5" maxlength="50" name="name" type="text" placeholder="Nombre y apellidos" class=" form-control my-3 p-2 w-100">
                                </div>
                            </div>
                            <div class="container d-flex justify-content-between w-100 px-3">
                                <button onclick="generarInput()" class="add_person p-0 mt-2"><b>+ añadir acompañante</b></button>
                                <button id="btn" disabled class="btn btn-success mt-2">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="background: #0D0E53ff;" viewBox="0 0 1440 320"><path fill="#02BD5Fff" fill-opacity="1" d="M0,288L80,288C160,288,320,288,480,266.7C640,245,800,203,960,197.3C1120,192,1280,224,1360,240L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
        <div class="row px-5 logros">
            <h1 class="text-center impact text-light"><b>EL AÑO PASADO...</b></h1>
            <div class="col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-center">
                    <img class="w-100 p-5 photo-green" src="../../assets/imgs/logros1.jpg" alt="">
                </div>
                <h2 class="text-center text-light"><b>Sorteos y sorpresas</b></h2>
                <p class="text-center"><b>Disfrutamos de una jornada plagada de risas y alegría con sorteos de cestas además de emotivos momentos con discursos como el de Ángel Téllez</b></p>
            </div>
            <div class="col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-center">
                    <img class="w-100 p-5 photo-orange" src="../../assets/imgs/logros2.jpg" alt="">
                </div>
                <h2 class="text-center">+ de <b class="text-light">300 personas</b></h2>
                <p class="text-center"><b>Más de 300 personas acudieron a disfrutar del evento y disfrutar de un mediodía repleto de solidaridad, buena compañía y alguna que otra sopresa</b></p>
            </div>
            <div class="col-12 col-lg-4 p-3">
                <div class="d-flex justify-content-center">
                    <img class="w-100 p-5 photo-blue" src="../../assets/imgs/logros3.jpg" alt="">
                </div>
                <h2 class="text-center">+ de <b class="text-light">5000€ recaudados</b></h2>
                <p class="text-center"><b>Con nuestra jornada solidaria conseguimos recaudar una generosa cantidad de dinero que ha podido ayudar en la lucha contra el ELA.</b></p>
            </div>
            <h1 class="text-center impact text-light my-4"><b>¡SUPERÉMOSLO JUNTOS!</b></h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#02BD5Fff" fill-opacity="1" d="M0,64L80,90.7C160,117,320,171,480,186.7C640,203,800,181,960,144C1120,107,1280,53,1360,26.7L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        <div style="margin-top: -50px" >
            <?php
                include "./collaborators.php";
            ?>
        </div>
        <svg style="margin-top: -50px"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1440 320"><path fill="#F79251ff" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,165.3C384,181,480,171,576,160C672,149,768,139,864,138.7C960,139,1056,149,1152,154.7C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <div style="margin-top: -100px" class="contact row text-light d-flex justify-content-center p-md-5">
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="pb-5 px-5 p-md-5">
                    <h2 class="text-center my-3 impact t-orange-light">¿QUIERES COLABORAR DE MANERA EXTRAORDINARIA?</h2>
                    <p class="h5 mt-5 text-center t-orange-light">
                        Envíanos un correo a <u><b>correo@mail.com</b></u> y dinos de qué manera quieres ayudar.
                        Ya sea donación económica para la causa, aporte de comida, aporte de material o simplemente colaboración,
                        toda ayuda será bien recibida.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/javascript.js"></script>
</body>
</html>
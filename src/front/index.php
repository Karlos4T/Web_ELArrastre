<!DOCTYPE html>
<html lang="en">
    <?php
        include("../../config.php");
        include(BASE_PATH.'/src/includes/head.php');
    ?>
<body>
    <?php
        include "../../src/includes/menu.php";
    ?>
    <div id="main">
        <div class="register-default mb-5">
            <div class="row w-100 ">
                <div class="col-6 d-none d-lg-block bg-light">
                    <img class="w-100" src="../../assets/imgs/Logo_arrastre.png" alt="">
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
        <div class="col-12 d-flex justify-content-center my-5 p-md-5">
            <div class="col-12 col-md-8 p-3 py-5">
                <h1 class="text-center"><b>¡Échanos un capote contra el ELA! 🍽️❤️</b></h1>
                <h4 class="text-center my-5">
                    Únete a la 2ª edición de la <b>Comida Solidaria</b> contra el ELA organizada por la Peña El Arrastre en 
                    <b>Villanueva de Bogas</b>. Por tan solo <b>10 euros</b>, disfruta de una deliciosa experiencia 
                    gastronómica mientras contribuyes a una noble causa. ¡Cada bocado cuenta para luchar 
                    contra la Esclerosis Lateral Amiotrófica (ELA)! Comparte la alegría de dar y siente 
                    el poder de hacer la diferencia. ¡Te esperamos con los brazos abiertos y las mesas 
                    llenas de generosidad!"
                </h4>
                <div class="d-flex justify-content-center">
                    <img class="col-12 col-md-6" src="../../assets/imgs/Logo_AdelanteCLM.png" alt="">
                </div>
            </div>
        </div>
        <div class="row p-5 my-5 logros">
            <h2 class="text-center"><b>El año pasado...</b></h2>
            <div class="col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-center">
                    <img class="w-100 p-5" src="../../assets/imgs/logros1.jpeg" alt="">
                </div>
                <h2 class="text-center">Título de prueba</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorum dolorem tempora veritatis incidunt dolore rem odio repellendus quos necessitatibus tenetur ipsam excepturi corrupti, sunt officia quibusdam culpa et voluptas?</p>
            </div>
            <div class="col-12 col-md-6 col-lg-4 p-3">
                <div class="d-flex justify-content-center">
                    <img class="w-100 p-5" src="../../assets/imgs/logros2.jpeg" alt="">
                </div>
                <h2 class="text-center">+ de 300 personas</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorum dolorem tempora veritatis incidunt dolore rem odio repellendus quos necessitatibus tenetur ipsam excepturi corrupti, sunt officia quibusdam culpa et voluptas?</p>
            </div>
            <div class="col-12 col-lg-4 p-3">
                <div class="d-flex justify-content-center">
                    <img class="w-100 p-5" src="../../assets/imgs/logros3.jpeg" alt="">
                </div>
                <h2 class="text-center">+ de 5000€ recaudados</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorum dolorem tempora veritatis incidunt dolore rem odio repellendus quos necessitatibus tenetur ipsam excepturi corrupti, sunt officia quibusdam culpa et voluptas?</p>
            </div>
        </div>
        <div>
            <?php
                include "./collaborators.php";
            ?>
        </div>
        <div class="contact row bg-dark text-light mt-5">
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <div class="p-4 p-md-5">
                    <h2 class="text-center my-3">¿Quieres colaborar de manera extraordinaria?</h2>
                    <p class="h5 mt-5 text-center">
                        Envíanos un correo a <u><b>correo@mail.com</b></u> y dinos de qué manera quieres ayudar.
                        Ya sea donación económica para la causa, aporte de comida, aporte de inmobiliario o simplemente colaboración,
                        toda ayuda será bien recibida.
                    </p>
                </div>
            </div>
            <div class="col-6 d-none d-lg-block bg-light">
                <img class="w-100" src="../../assets/imgs/Logo_arrastre.png" alt="">
            </div>
        </div>
    </div>
    <script src="../../assets/js/javascript.js"></script>
</body>
</html>
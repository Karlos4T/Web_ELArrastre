<!DOCTYPE html>
<html lang="en">
    <?php
        include("../../config.php");
        include(BASE_PATH.'/src/includes/head.php');
    ?>
<body>
    <div id="main">
        <div class="register-default bg-primary p-2">
            <div class="row w-100">
                <div class="col-12 col-md-6">
                    <div class="container-text d-flex flex-column text-center align-items-center my-3">
                        <h2>Texto de relleno</h2>
                    </div>
                    <form id="registerForm" action="./logic/send_data.php" method="post" class="w-100">
                        <div id="inputsContainer" class="container">
                            <div id="inputDiv0" class="d-flex">
                                <input onkeyup="active_desactive_btn()" id="inpt" minlength="5" maxlength="50" name="name" type="text" placeholder="Pon tu nombre y apellidos" class="my-3 p-2 w-100">
                            </div>
                        </div>
                        <button onclick="generarInput()" class="btn btn-success">Add person</button>
                        <button id="btn" disabled class="btn btn-success mt-2">Submit</button>
                    </form>
                </div>
                <div class="col-6 p-5">
                    <img class="w-100" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages4.alphacoders.com%2F111%2Fthumb-1920-1118452.jpg&f=1&nofb=1&ipt=cacb13d1eee6d6a3b56e8f7beda9e8bfd531bb6d4ec35f4b9c069d59e9af14f3&ipo=images" alt="">
                </div>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-4 p-3">
                <h2 class="text-center">Título de prueba</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorum dolorem tempora veritatis incidunt dolore rem odio repellendus quos necessitatibus tenetur ipsam excepturi corrupti, sunt officia quibusdam culpa et voluptas?</p>
            </div>
            <div class="col-4 p-3">
                <h2 class="text-center">Título de prueba</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorum dolorem tempora veritatis incidunt dolore rem odio repellendus quos necessitatibus tenetur ipsam excepturi corrupti, sunt officia quibusdam culpa et voluptas?</p>
            </div>
            <div class="col-4 p-3">
                <h2 class="text-center">Título de prueba</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorum dolorem tempora veritatis incidunt dolore rem odio repellendus quos necessitatibus tenetur ipsam excepturi corrupti, sunt officia quibusdam culpa et voluptas?</p>
            </div>
            <!--Sección para apuntar todo los numeros del año pasado-->
        </div>
        <div>
            <!--Sección marcas que colaboran-->
        </div>
        <div>
            <!--Sección colaboración extraordinaria-->
        </div>
    </div>
    <script src="../assets/js/javascript.js"></script>
</body>
</html>
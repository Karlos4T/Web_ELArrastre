<div id="apuntate" class="register-default my-5 py-5">
    <div class="row m-0 w-100">
        <!-- Sección izquierda con imagen -->
        <div class="col-6 p-0 d-none d-lg-block p-5">
            <img class="w-100 m-3 h-100 img_header" src="../../assets/imgs/foto1.jpg" alt="">
        </div>
        <!-- Sección derecha con formulario -->
        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
            <div class="p-0 my-5 p-md-5">
                <div class="container-text d-flex flex-column text-center align-items-center my-3">
                    <h5 class="">Si ya tienes pensado venir...</h5>
                    <h1 class=" my-3">Apúntate a ti y a tus acompañantes</h1>
                    <div class="arrow-container">
                        <i class="fa-solid fa-circle-down"></i>
                    </div>
                </div>
                <!-- Formulario -->
                <form id="registerForm" action="../back/send_data.php" method="post" class="w-100">
                    <input type="hidden" name="user_input">
                    <div id="inputsContainer" class="container">
                        <div id="inputDiv0" class="d-flex">
                            <input onkeyup="active_desactive_btn()" id="inpt" minlength="5" maxlength="50" name="name" type="text" placeholder="Nombre y apellidos" class="form-control my-3 p-2 w-100">
                        </div>
                    </div>
                    <div class="container d-flex justify-content-between w-100 px-3">
                        <button type="button" onclick="generarInput()" class="add_person px-2 mt-2">+ añadir acompañante</button>
                        <button id="btn" type="submit" class="btn btn-success mt-2">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Contador de personas apuntadas -->
        <div class="col-12 mt-3">
            <h1 class=" text-center">¡Ya somos más de <b><?php echo get_n_users($con);?></b> personas apuntadas!</h1>
        </div>
    </div>
</div>

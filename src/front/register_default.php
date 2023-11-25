<div id="apuntate" class="register-default">
    <div class="row m-0 w-100 ">
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
                    <input type="hidden" name="user_input">
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
        <div class="col-12 mt-3">
            <h1 class="text-light text-center">¡Ya somos más de <b><?php echo get_n_users($con);?></b> personas apuntadas!</h1>
        </div>
    </div>
</div>
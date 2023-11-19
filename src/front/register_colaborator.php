<div class="contact row m-0 d-flex justify-content-center px-md-5 pb-md-5 p-3">
    <h2 class="text-center my-3 impact">¿QUIERES COLABORAR DE MANERA EXTRAORDINARIA?</h2>
    <div class="col-12 col-md-5 d-flex align-items-center">
        <div class="p-lg-5">
            <p class="h5 text-center">
                Envíanos un correo a <u><b>jalvas65@gmail.com</b></u> o contáctanos al número de teléfono <u><b>+34 616519625</b></u> y dinos de qué manera quieres ayudar.
                Ya sea donación económica para la causa, aporte de comida, aporte de material o simplemente colaboración,
                toda ayuda será bien recibida.
            </p>
        </div>
    </div>
    <div class="col-12 row col-md-1 d-flex my-5 d-flex justify-content-center align-items-center">
        <div class="col-5 line d-md-none"></div>
        <h4 class="text-center col-2"><b>O</b></h4>
        <div class="col-5 line d-md-none"></div>
    </div>
    <form class="col-12 col-md-6 p-md-5" action="../back/send_data.php" method="POST" enctype="multipart/form-data">
        <h4 class="text-center mb-5">RELLENA EL FORMULARIO Y NOS PONDREMOS EN CONTACTO CONTIGO</h4>
        <input type="hidden" name="collaborator_input" value="1">
        <input required class="form-control my-3" type="text" name="name" placeholder="Nombre de persona o entidad">
        <div class="form-group d-flex justify-content-center">
            <input type="file" class="form-control-file d-none" name="img" accept="image/*" id="imagen">
            <label class="btn btn-primary ml-3" for="imagen"><b>+ Añade el logotipo de tu entidad</b></label> <span class="p-2 mx-2"><b>(opcional)</b></span>
        </div>
        <input required class="form-control my-3" type="text" name="mail" placeholder="Correo o teléfono de contacto">
        <textarea required class="form-control my-3" name="message" id="" cols="30" placeholder="¿Cuál es tu propuesta?" rows="5"></textarea>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</div>
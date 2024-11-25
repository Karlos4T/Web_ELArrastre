<div class="contact row m-4 d-flex justify-content-center px-md-5 p-3 my-5">
    <h2 class="text-center my-3 impact">¿QUIERES COLABORAR DE MANERA EXTRAORDINARIA?</h2>
    <div class="col-12 col-md-5 d-flex align-items-center">
        <div class="p-lg-5">
            <p class="h5 text-center">
                Envíanos un correo a <b>jalvas65@gmail.com</b> o contáctanos al número de teléfono <b>+34 616519625</b> y dinos de qué manera quieres ayudar.
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
        <h4 class="text-center mb-5">Rellena el formulario y nos pondremos en contacto contigo</h4>
        <input type="hidden" name="collaborator_input" value="1">
        <input required class="form-control my-3" type="text" name="name" placeholder="Nombre de persona o entidad">
        <input required class="form-control my-3" type="text" name="mail" placeholder="Correo o teléfono de contacto">
        <textarea required class="form-control my-3" name="message" id="" cols="30" placeholder="¿Cuál es tu propuesta?" rows="5"></textarea>
        <div class="form-group d-flex justify-content-center mb-3">
            <input type="file" class="form-control-file d-none" name="img" accept="image/*" id="imagen">
            <label class="btn btn-primary ml-3" for="imagen"><b>+ Añade el logotipo de tu entidad</b></label> <span class="p-2 mx-2 text-secondary"><b>(opcional)</b></span>
        </div>
        <span class="py-2"><b>Incluye aqui el enlace a tu web o redes sociales:</b></span>
        <div class="form-group d-flex justify-content-center">
            <input class="form-control mb-3 mt-1" type="text" name="link" placeholder="Página web o redes sociales"><span class="p-2 mx-2 text-secondary"><b>(opcional)</b></span>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</div>
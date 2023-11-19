<style>
    .formulario {
        max-width: 500px;
        margin: 0 auto;
    }
    .preview-imagen {
        max-width: 100%;
        margin-top: 10px;
    }
    .preview-imagen img {
        width: 100%;
        margin-top: 2rem;
    }
</style>

<div class="modal fade animated zoomIn" id="add_collaborator" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="miModalLabel">Añadir Colaborador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="../back/send_data.php" enctype="multipart/form-data">
        <div class="modal-body">
            <input type="hidden" name="collaborator_input" value="1">
            <div class="form-group">
                <label for="texto">Nombre:</label>
                <input required class="form-control" id="texto" name="name" placeholder="Nombre o entidad">
            </div>
            <div class="form-group mt-2">
                <label for="texto">Contacto:</label>
                <input class="form-control" id="texto" name="mail" placeholder="Correo o Teléfono">
            </div>
            <div class="preview-imagen"></div>
            <div class="form-group d-flex justify-content-center">
                <label class="btn btn-primary my-3" for="imagen">Insertar imagen</label>
                <input type="file" class="form-control-file d-none" name="img" accept="image/*" id="imagen">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Añadir</button>
        </div>
    </form>
    </div>
  </div>
  <script>
    var inputImagen = document.getElementById('imagen');
    var previewImagen = document.querySelector('.preview-imagen');

    inputImagen.addEventListener('change', function() {
        if (inputImagen.files && inputImagen.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var imagen = document.createElement('img');
                imagen.src = e.target.result;

                previewImagen.innerHTML = '';
                previewImagen.appendChild(imagen);
            };

            reader.readAsDataURL(inputImagen.files[0]);
        }
    });
</script>
</div>


<div class="modal fade animated zoomIn" id="show_collaborators" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="miModalLabel">Detalles del Colaborador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Nombre: <b><span id="userName"></span></b></p>
        <p>Contacto: <b><span id="userMail"></b></span></p>
        <p>Propuesta de colaboración: <b><span id="userMessage"></span></b></p>
        <form action="../back/send_data.php" method="post">
          <input type="hidden" id="userId" name="id" value="">
          <input type="hidden" name="update-link" value="1">
          <div class="d-flex">
            <input type="text" class="form-control" placeholder="Link web o redes sociales" name="link">
            <button type="submit" class="btn btn-success mx-2"><i class="fa-solid fa-arrow-right"></i></button>
          </div>
        </form>
        <div class="row d-flex justify-content-center">
          <img class="col-8 d-none" id="userImage" src="" alt="Imagen del usuario">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
  $('#show_collaborators').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); 
    var datos = button.data('datos');
    var rutaCompleta = '../../assets/imgs/collaborators/' + datos.path_img;

    $('#userId').val(datos.id);
    $('#userName').text(datos.name);
    $('#userMail').text(datos.mail);
    $('#userMessage').text(datos.message);
    $('#userImage').attr('src', rutaCompleta);

    if (datos.path_img === '') {
      $('#userImage').addClass('d-none');
    } else {
      $('#userImage').removeClass('d-none');
    }
  });
</script>


</body>
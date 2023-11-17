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
<body>

<div class="d-flex flex-column justify-content-center formulario h-100">
    <div class="card bg-light p-4 my-3">
        <h3 class="text-center my-3">+ Añadir Colaborador</h3>
        <form method="post" action="../back/post_collaborators.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="texto">Nombre:</label>
                <input required class="form-control" id="texto" name="name" placeholder="Nombre o entidad">
            </div>
            <div class="preview-imagen"></div>
            <div class="form-group d-flex justify-content-center">
                <label class="btn btn-primary my-3" for="imagen">Insertar imagen</label>
                <input type="file" class="form-control-file d-none" name="img" accept="image/*" id="imagen">
            </div>
            <button type="submit" class="btn btn-success">Añadir</button>
        </form>
    </div>
</div>
<!-- Agrega los scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script para mostrar la vista previa de la imagen seleccionada -->
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
</body>
</html>
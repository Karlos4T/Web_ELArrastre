<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Añadir Imagen y Texto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        .formulario {
            max-width: 500px;
            margin: 0 auto;
        }
        .preview-imagen {
            max-width: 10rem;
            margin-top: 10px;
        }
        .preview-imagen img {
            max-width: 10rem;
        }
    </style>
</head>
<body>

<div class="container formulario">
    <h2>Añadir Imagen y Texto</h2>
    <form>
        <div class="form-group">
            <label for="texto">Texto:</label>
            <input class="form-control" id="texto" rows="4" placeholder="Escribe tu texto aquí"></input>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" class="form-control-file" id="imagen">
            <small id="imagenHelp" class="form-text text-muted">Selecciona una imagen para añadir.</small>
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
    <div class="preview-imagen">
    </div>
</div>

<!-- Agrega los scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script para mostrar la vista previa de la imagen seleccionada -->
<script>
    // Selecciona el elemento de entrada de imagen
    var inputImagen = document.getElementById('imagen');
    // Selecciona el elemento de vista previa de la imagen
    var previewImagen = document.querySelector('.preview-imagen');

    // Añade un evento de cambio al input de imagen
    inputImagen.addEventListener('change', function() {
        // Verifica si se seleccionó una imagen
        if (inputImagen.files && inputImagen.files[0]) {
            var reader = new FileReader();

            // Lee la imagen como una URL de datos
            reader.onload = function(e) {
                // Crea un elemento de imagen y establece su fuente como la URL de datos
                var imagen = document.createElement('img');
                imagen.src = e.target.result;

                // Añade la imagen a la vista previa
                previewImagen.innerHTML = '';
                previewImagen.appendChild(imagen);
            };

            // Lee la imagen como una URL de datos
            reader.readAsDataURL(inputImagen.files[0]);
        }
    });
</script>

</body>
</html>
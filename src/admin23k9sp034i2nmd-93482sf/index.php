<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            height: 100vh;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<?php
    if (isset($_SESSION['rol']))
        header("Location: ./admin_data.php");
?>
<body>
<div class="container">
    <h2>Accede como administrador</h2>
    <form method="POST" action="../back/session_start.php">
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="username" placeholder="Ingrese su usuario" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="contrasena" name="password" placeholder="Ingrese su contraseña" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="verContrasena">Ver</button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

<!-- Agrega los scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Añade un evento de clic al botón de "Ver" para alternar la visibilidad de la contraseña
    document.getElementById("verContrasena").addEventListener("click", function() {
        var contrasenaInput = document.getElementById("contrasena");
        if (contrasenaInput.type === "password") {
            contrasenaInput.type = "text";
        } else {
            contrasenaInput.type = "password";
        }
    });
</script>

</body>
</html>
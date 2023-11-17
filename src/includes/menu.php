<div class="menu bg-dark p-1 d-flex align-items-center justify-content-between">
    <div class="w-25">
    </div>
    <a class="h-100" href="../../src/front">
        <img class="h-100" src="../../assets/imgs/Logo_arrastre_blanco.png" alt="">
    </a>
    <div class="w-25 d-flex justify-content-end px-3">
        <?php
        if (isset($_SESSION['rol']))
        {
            if ($_SESSION['rol'] == 'admin')
            ?>
                <a class="text-light" href="../../src/admin23k9sp034i2nmd-ñ93482sf/">
                    Panel de administrador
                </a>
                <?php
        }
        ?>
    </div>
</div>
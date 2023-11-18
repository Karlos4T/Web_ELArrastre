<?php
if (isset($_SESSION['rol']))
{
    if ($_SESSION['rol'] == 'admin')
    ?>
        <div class="menu p-1 d-flex align-items-center justify-content-between">
            <div class="w-25">
            </div>
            <a class="h-100 img-cont" href="../../src/front">
                <img class="h-100" src="../../assets/imgs/LogoELArrastre.png" alt="">
            </a>
            <div class="w-25 d-flex justify-content-end px-3">
                <a class="text-dark" href="../../src/admin23k9sp034i2nmd-ñ93482sf/">
                    <b>
                        Panel de administrador
                    </b>
                </a>
            </div>
        </div>
    <?php
}
?>
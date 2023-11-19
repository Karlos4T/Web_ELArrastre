<!DOCTYPE html>
<html lang="en">
<?php
    include "../includes/head.php";
    if (!isset($_SESSION['rol']))
        header("Location: ./index.php");
?>
<body>
    <?php
        include "../../src/includes/menu.php";
        include "../../src/admin23k9sp034i2nmd-93482sf/tables.php";
        include "./modals.php";
    ?>
    <div class="container py-4 d-flex justify-content-center">
        <div class="row w-100 d-flex justify-content-center">
            <div class="row w-100 text-center t-blue my-3">
                <h1>¡Se han apuntado <b><?php echo get_n_users($con);?></b> personas!</h1>
            </div>
            <div class="col-12 col-lg-6">
                <?php
                    print_users_table($_GET, $con);
                ?>
            </div>
            <div class="col-12 col-lg-6">
                <?php
                    print_collaborators_table($_GET, $con);
                ?>
            </div>
        </div>
    </div>
</body>

</html>
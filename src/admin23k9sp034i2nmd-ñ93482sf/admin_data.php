<!DOCTYPE html>
<html lang="en">
<?php
    include "../includes/head.php";
    include "../back/functions.php";
    if (!isset($_SESSION['rol']))
        header("Location: ./index.php");
?>
<body>
    <div class="container d-flex justify-content-center">
        <div class="row w-100 d-flex justify-content-center">
            <div class="filter w-100 d-flex justify-content-end mt-2">
                <form action="./admin_data.php" method="GET" class="d-flex flex-wrap justify-content-between justify-content-md-end align-items-center">
                    <div class="search d-flex mx-1">
                        <input name="intext" type="text" class="intext h-100 py-1 px-3" placeholder="Buscar">
                        <button type="submit" class="px-2 d-flex align-items-center btn-searchers" value=""><span class="material-symbols-outlined">search</span></button>
                    </div>
                    <div class="order d-flex mx-1">
                        <select class="select px-2 py-1" name="order" id="">
                            <option value="`id` DESC">Mas reciente</option>
                            <option value="`id` ASC">Mas antiguo</option>
                            <option value="`name` ASC">A-Z</option>
                            <option value="`name` DESC">Z-A</option>
                        </select>
                        <button type="submit" class="h-100 p-auto px-2 py-1 d-flex align-items-center btn-searchers" value=""><span class="material-symbols-outlined sort">sort</span></button>
                    </div>
                    <a class="btn-reset mx-1 d-flex p-1 align-content-center m-0" href="./admin_data.php"><span  class="material-symbols-outlined">restart_alt</span></a>
                </form>
            </div>
            <div class="table m-4 col-8">
                <?php
                include '../back/hostconnect.php';

                if (isset($_GET['intext']) || isset($_GET['order'])){
                    $order = $_GET['order'];
                    if (isset($_GET['intext']) && !empty($_GET['intext'])){
                        $searcher = $_GET['intext'];
                        $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%$searcher%' ORDER BY $order";
                    }
                    else
                        $query = "SELECT `name` FROM `names` ORDER BY $order";
                }
                else
                    $query = "SELECT `name` FROM `names` ORDER BY `id` DESC";

                $data = mysqli_query($con, $query);
                if ($data) {
                    while ($row = mysqli_fetch_array($data)) {
                ?>
                <div class="row_table d-flex justify-content-between m-0 px-3">
                    <div class="cont-name">
                        <h6 class="m-0 d-flex h-100 name align-items-center"><?php echo $row['name']; ?></h6>
                    </div>
                </div>
                <?php
                    }
                } else 
                    echo 'error';
                ?>
            </div>
            <div class="row w-100 text-center mt-3">
                <h1 >¡Se han apuntado <b> <?php echo get_n_users();?></b> personas!</h1>
            </div>
        </div>
    </div>
    <?php
        include "./add_collaborators.php";
    ?>
</body>

</html>
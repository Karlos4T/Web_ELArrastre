<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" c rossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="../styles/admin_data.css">

    <!--ICONS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!--TOP ICON-->
    <link rel="shortcut icon" href="../imgs/logo.png" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
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
                        </div>
                    </form>
                <div class="table m-4 col-8">
                    <?php
                    include './hostconnect.php';

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
                    $n_total = 0;

                    if ($data) {
                        while ($row = mysqli_fetch_array($data)) {
                    ?>
                            <div class="row_table d-flex justify-content-between text-light m-0 px-3">
                                <div class="cont-name">
                                    <h6 class="m-0 d-flex h-100 name align-items-center"><?php echo $row['name']; ?></h6>
                                </div>
                                <div class="n-persons">
                                    <h5><?php
                                        $npersons = 1;
                                        if ($n = substr_count($row['name'], ","))
                                            $npersons += $n;
                                        if (strstr($row['name'], " e "))
                                            $npersons++;
                                        else if (strstr($row['name'], " y "))
                                            $npersons++;
                                        $nums = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
                                        $i = 0;
                                        while ($i < count($nums)){
                                            if(strpos($row['name'], $nums[$i]) != false)
                                            {
                                                $npersons += $i + 1;
                                                break;
                                            }
                                            $i++;
                                        }
                                        $n_total += $npersons;
                                        echo $npersons;
                                        ?>
                                    </h5>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo 'error';
                    }
                    ?>
                </div>
                <div class="row w-100 text-center text-light mt-3">
                    <h1 >¡Se han apuntado <b> <?php echo $n_total;?></b> personas!</h1>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
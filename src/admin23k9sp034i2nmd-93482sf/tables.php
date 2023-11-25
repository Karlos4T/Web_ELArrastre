<?php

function print_users_table($data, $con)
{
    ?>
        <div class="card p-4 bg-light">
            <h4 class="text-center"><b>ASISTENTES</b></h4>
            <div class="filter w-100 d-flex justify-content-end mt-2">
                <form action="./admin_data.php" method="GET" class="d-flex flex-wrap justify-content-between justify-content-md-end align-items-center mb-4">
                    <input type="hidden" name="users" value="1">
                    <div class="search d-flex mx-1">
                        <input name="intext" type="text" class="intext h-100 py-2 px-3" placeholder="Buscar">
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
                    <a class="btn-reset mx-1 d-flex p-2 align-content-center m-0" href="./admin_data.php"><i class="fa-solid fa-broom"></i></a>
                </form>
            </div>
            <div class="table">

                <?php
                if ((isset($data['intext']) || isset($data['order'])) && isset($data['users'])){
                    $order = $data['order'];
                    if (isset($data['intext']) && !empty($data['intext'])){
                        $searcher = $data['intext'];
                        $query = "SELECT `id`, `name`, `mostrar` FROM `names` WHERE `name` LIKE '%$searcher%' ORDER BY $order";
                    }
                    else
                    $query = "SELECT `id`, `name`, `mostrar` FROM `names` ORDER BY $order";
                }
                else
                $query = "SELECT `id`, `name`, `mostrar` FROM `names` WHERE `mostrar`='1' ORDER BY `id` DESC ";
                
                $data = mysqli_query($con, $query);
                if ($data) {
                    while ($row = mysqli_fetch_array($data)) {
                        ?>
                        <div class="row_table d-flex justify-content-between m-0 px-3">
                            <div class="cont-name">
                                <h6 class="m-0 d-flex h-100 name align-items-center"><?php echo $row['name']; ?></h6>
                            </div>
                            <?php
                                if($row['mostrar'] == 0)
                                {
                                    ?>
                                        <form action="../back/send_data.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                            <input type="hidden" name="recover" value="1">
                                            <button type="submit" class="btn btn-outline-success p-0 m-1">
                                                <i class="fa-solid fa-box-open p-2"></i>
                                            </button>
                                        </form>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <form action="../back/send_data.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                            <input type="hidden" name="delete" value="1">
                                            <button style="border: none" type="submit" class="text-danger p-0 m-1">
                                                <i class="fa-solid fa-trash p-2"></i>
                                            </button>
                                        </form>
                                    <?php
                                }
                            ?>
                        </div>
                        <?php
                            }
                        } else 
                            echo 'error';
                    ?>
            </div>
        </div>
    <?php
}


function print_collaborators_table($data, $con)
{
    ?>
        <div class="card p-4 bg-light">
            <h4 class="text-center mb-3"><b>COLABORADORES</b></h4>
            
            <div class="table">
                <?php
                $query = "SELECT `id`, `name`, `mail`, `message`, `path_img`, `mostrar` FROM `collaborators` ORDER BY `id` DESC";
                
                $data = mysqli_query($con, $query);
                if ($data) {
                    while ($row = mysqli_fetch_array($data)) {
                        ?>
                <div class="row_table d-flex justify-content-between m-0">
                    <div class="cont-name">
                        <h6 class="m-0 d-flex h-100 name align-items-center"><?php echo $row['name']; ?></h6>
                        <h6 class="m-0 d-flex h-100 name align-items-center d-none d-md-block"><?php echo $row['mail']; ?></h6>
                    </div>
                    <?php
                        if($row['mostrar'] == 0)
                        {
                            ?>
                                <form action="../back/send_data.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <input type="hidden" name="show" value="1">
                                    <button type="submit" class="btn btn-outline-success p-0 m-1">
                                        <i class="fa-solid fa-eye-slash p-2"></i>
                                    </button>
                                </form>
                            <?php
                        }
                        else
                        {
                            ?>
                                <form action="../back/send_data.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <input type="hidden" name="hide" value="1">
                                    <button type="submit" class="btn btn-success bg-success p-0 m-1">
                                        <i class="fa-solid fa-eye p-2"></i>
                                    </button>
                                </form>
                            <?php
                        }
                    ?>
                    <button class="btn btn-warning p-0 m-1"  data-toggle="modal" data-target="#show_collaborators" data-datos='<?php echo json_encode($row);?>'>
                        <i class="fa-solid fa-plus p-2"></i>
                    </button>
                </div>
                <?php
                    }
                } else 
                    echo 'error';
                ?>
            </div>
            <button type="button" class="btn btn-success my-2" data-toggle="modal" data-target="#add_collaborator">
                <b>+ Añadir colaborador</b>
            </button>
        </div>
    <?php
}


function print_questions_table($data, $con)
{
    ?>
        <div class="card p-4 bg-light">
            <h4 class="text-center mb-3"><b>PREGUNTAS</b></h4>
            
            <div class="table">
                <?php
                $questions = get_all_questions($con);
                
                while ($row = mysqli_fetch_array($questions)) {
                    ?>
                <div class="row_table d-flex justify-content-between m-0">
                    <div class="cont-name">
                        <h6 class="m-0 d-flex h-100 name align-items-center"><?php echo $row['question']; ?></h6>
                        <h6 class="m-0 d-flex h-100 name align-items-center d-none d-md-block"><?php echo $row['answer']; ?></h6>
                    </div>
                    <?php
                        if($row['mostrar'] == 0)
                        {
                            ?>
                                <form action="../back/send_data.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <input type="hidden" name="show-question" value="1">
                                    <button type="submit" class="btn btn-outline-success p-0 m-1">
                                        <i class="fa-solid fa-eye-slash p-2"></i>
                                    </button>
                                </form>
                            <?php
                        }
                        else
                        {
                            ?>
                                <form action="../back/send_data.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <input type="hidden" name="hide-question" value="1">
                                    <button type="submit" class="btn btn-success bg-success p-0 m-1">
                                        <i class="fa-solid fa-eye p-2"></i>
                                    </button>
                                </form>
                            <?php
                        }
                    ?>
                    <button class="btn btn-warning p-0 m-1"  data-toggle="modal" data-target="#edit_question" data-datos='<?php echo json_encode($row);?>'>
                        <i class="fa-solid fa-plus p-2"></i>
                    </button>
                </div>
                <?php
                    }
                ?>
            </div>
            <button type="button" class="btn btn-success my-2" data-toggle="modal" data-target="#add_question">
                <b>+ Añadir pregunta</b>
            </button>
        </div>
    <?php
}
?>
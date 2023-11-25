<?php 
    $arr = get_collaborators($con);
    ?>
    <h2 class="m-3 text-center t-blue impact">COLABORADORES</h2>
    <div class="collaborators m-0 p-2 p-md-5 d-flex flex-wrap row">
    <?php
        while ($row = mysqli_fetch_array($arr))
        {
            ?>
                
                <?php    
                    if (empty($row['path_img']))
                    {
                        ?>
                        <a <?php if (!empty($row['link'])){?>href="<?php echo $row['link']?>" <?php }?> class="card_colab col-6 col-sm-4 col-md-3 col-lg-2 p-3">
                            <p class="name_collab text-center mt-3 h3 t-blue"><b><?php echo $row['name'];?></b></p>
                        </a>  
                        <?php
                    }
                    ?>
            <?php
        }    
        $arr = get_collaborators($con);
        while ($row = mysqli_fetch_array($arr))
        {
            ?>
                <?php    
                    if (!empty($row['path_img']))
                    {
                        ?>
                        <a <?php if (!empty($row['link'])){?>href="<?php echo $row['link']?>" <?php }?>target="blank" class="card_colab col-6 col-sm-4 col-md-3 col-lg-2 p-3 d-flex align-items-between">
                            <div class="h-100 d-flex align-items-center justify-content-center p-3 pb-0">
                                <img class="logo_collab" src="<?php echo('../../assets/imgs/collaborators/'.$row['path_img']);?>" alt="">
                            </div>
                            <p class="name_collab text-center mt-3 t-blue"><?php echo $row['name'];?></p>
                        </a>
                        <?php
                    }
                    ?>
            <?php
        }    
    ?>
    </div>
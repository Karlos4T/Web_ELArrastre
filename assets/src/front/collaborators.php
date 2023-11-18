<?php 
    include "../back/includes";

    $arr = get_collaborators($con);
    ?>
    <h2 class="m-3 text-center t-blue impact"><b>ENTIDADES QUE COLABORAN</b></h2>
    <div class="collaborators p-5 d-flex flex-wrap row">
    <?php
        while ($row = mysqli_fetch_array($arr))
        {
            ?>
                
                <?php    
                    if (empty($row['path_img']))
                    {
                        ?>
                        <div class="m-2 card_colab p-3">
                            <p class="name_collab text-center mt-3 h3 t-blue"><?php echo $row['name'];?></p>
                        </div>  
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
                        <div class="m-2 card_colab p-3">
                            <img class="logo_collab h-auto" src="<?php echo('../../assets/imgs/collaborators/'.$row['path_img']);?>" alt="">
                            <p class="name_collab text-center mt-3 t-blue"><?php echo $row['name'];?></p>
                        </div>   
                        <?php
                    }
                    ?>
            <?php
        }    
    ?>
    </div>
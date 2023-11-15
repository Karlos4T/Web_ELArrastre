<?php 
    include "../back/includes";

    $arr = get_collaborators($con);
    ?>
    <div class="collaborators p-5">
    <?php
        while ($row = mysqli_fetch_array($arr))
        {
            ?>
                <div class="card">
                    <img src="<?php echo('../../assets/imgs/collaborators/'.$row['path_img']);?>" alt="">
                    <p class=""><?php echo $row['name'];?></p>
                </div>
                
            <?php
        }    
    ?>
    </div>
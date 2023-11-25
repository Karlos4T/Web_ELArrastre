<div id="info" class="p-2 p-md-5">
    <h2 class="impact text-center my-3 t-blue"><i class="fa-solid fa-circle-plus mx-2"></i>INFORMACIÓN</h2>
    <div>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus dicta veniam atque possimus delectus est distinctio iure? Dolorem aut laborum delectus, est omnis saepe totam architecto vero, officia reprehenderit quasi?</p>
    </div>
    <h4 class="impact text-center my-3 t-blue">VUESTRAS PREGUNTAS</h4>
    <div class="questions-container d-flex justify-content-center flex-wrap">
        <?php
        $questions = get_questions($con);
        while ($row = mysqli_fetch_array($questions))
        {
            ?>
            <div class="question-card w-auto p-3 text-center">
                <div class="h5 impact my-2"><?php echo ($row["question"]);?></div>
                <div class="h6"><?php echo ($row["answer"]); ?></div>
            </div>
            <?php
        }
        ?>
    </div>
    <h5 class="text-center my-3 mb-5">Si tienes alguna otra duda sobre el evento pregúntanos aquí</h5>
    <form action="../back/send_data.php" method="POST" class="d-flex justify-content-center">
        <input type="hidden" name="post-question"> 
        <div class="d-flex col-12 col-md-6 col-lg-4">
            <input type="text" placeholder="Escribe tu pregunta" class="form-control mx-2" name="question">
            <button type="submit" class="btn btn-success mx-2"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </form>
</div>
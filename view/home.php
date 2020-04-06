<?php require VIEW . "/_head.php" ?>
<?php require VIEW . "/_header.php" ?>

<section class="section">
    <div class="container">
        
            <h1 class='title is-1 is-primary'>Voici la Home !</h1>
            <?php while($data = $post->fetch()){
            ?>
                <h2 class="is-size-3 has-text-primary"><?= htmlspecialchars($data['categorie']) ?></h2>

            <?php
            }
            $post->closeCursor();
            ?>
        
    </div>
</section>       


<?php require VIEW . "/_footer.php" ?>

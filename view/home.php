<?php require VIEW . "/_head.php" ?>
<?php require VIEW . "/_header.php" ?>

<section class="section">
    <div class="container">
        
            <h1 class='title is-3 is-primary'>Voici la Home !</h1>
            <?php while($data = $post->fetch()){
            ?>
                <h2 class="is-size-4 has-text-primary"><?= htmlspecialchars($data['categorie']) ?></h2>

            <?php
            }
            $post->closeCursor();
            ?>
        
    </div>

</section>       

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam est fugiat alias numquam dolorum impedit, at, deleniti magnam cum nisi officiis ipsa rem voluptas? Nihil odio in eveniet dignissimos asperiores.</p>



<?php require VIEW . "/_footer.php" ?>

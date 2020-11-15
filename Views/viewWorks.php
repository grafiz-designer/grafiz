 <section class="section works">
        
        <!-- is-variable is-0-mobile permettent d'enlever les gaps sur mobile -->
        <div class="columns is-mobile is-variable is-0-mobile is-multiline has-text-centered">

                <?php foreach($works as $key => $value): ?>
                
                <div class="column is-full-mobile is-half-tablet is-one-third-desktop is-one-third-widescreen is-one-third-fullhd">
                        <?php
                        // je rajoute le titre du 'work' dans l'URl en remplacant les espaces et autres par des tirets, en suppr les MAJ et apostrophes...l'ordre des règles est subtile
                        $nom = str_replace("'", "", $value->getNom());
                        $nom = str_replace("&", "et", $nom);
                        $nom = strtolower(str_replace(array(" - ", " "), "-", $nom));
                
                        ?>
                        <!-- je rajoute le nom dans l'URL pr le SEO -->
                        <a href="/grafiz-site/Works/show/<?= $value->getId(). '/'. $nom; ?>">
                                <div class="card">

                                <?php $class = ($value->getCategorie() == 'retouche') ? 'retouche' : '';?>
                                
                                        <div class="card-image">
                                               
                                                <figure class="image is3by2 <?= $class; ?>">
                                                        <img src="<?= $value->getImgShow(); ?>" 
                                                        alt="<?= $value->getNom(); ?>"
                                                        >
                                                        
                                                        <figcaption>
                                                                <h3 class='title is-3'><?= $value->getCategorie(); ?></h3>
                                                                <p class='subtitle is-5'><?= $value->getNom(); ?></p>
                                                        </figcaption> 
                                                </figure>
                                                
                                                
                                                
                                                
                                        </div>
                                </div>
                        </a>
                </div>
                
                <?php endforeach ?>
        </div>
                
                
</section>       
        
        
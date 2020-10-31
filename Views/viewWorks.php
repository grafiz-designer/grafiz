<section class="section categorie">
        
        
        <!-- <div class="tags are-medium">
                <span class="tag is-dark is-rounded">All</span>
                <span class="tag is-dark is-rounded">Affiche</span>
                <span class="tag is-dark is-rounded">Branding</span>
                <span class="tag is-dark is-rounded">Compositing</span>
                <span class="tag is-dark is-rounded">Retouche</span>
                <span class="tag is-dark is-rounded">Illustration</span>
                <span class="tag is-dark is-rounded">Print</span>
                <span class="tag is-dark is-rounded">Typographie</span>
                <span class="tag is-dark is-rounded">Web</span>
                <span class="tag is-dark is-rounded">Motion</span>
              
        </div> -->
        
        
        <!-- <div class="container is-fullhd">
                
                <ul>
                        <li><a href="#"><h2 class="title is-5">All</h2></a></li>
                        <li><a href="#"><h2 class="title is-5">Affiche</h2></a></li>
                        <li><a href="#"><h2 class="title is-5">Branding</h2></a></li>
                        <li><a href="#"><h2 class="title is-5">Compositing</h2></a></li>
                        <li><a href="#"><h2 class="title is-5">Retouche</h2></a></li>
                        <li><a href="#"><h2 class="title is-5">Illustration</h2></a></li>
                        <li><a href="#"><h2 class="title is-5">Print</h2></a></li>
                        <li><a href="#"><h2 class="title is-5">Typographie</h2></a></li>
                        <li><a href="#"><h2 class="title is-5">Web</h2></a></li>
                        <li><a href="#"><h2 class="last title is-5">Motion</h2></a></li>
                </ul> 
                
        </div> -->
        
</section>    



<section class="section works">
        
        <!-- is-variable is-0-mobile permettent d'enlever les gaps sur mobile -->
        <div class="columns is-mobile is-variable is-0-mobile is-multiline has-text-centered">

                <?php foreach($works as $key => $value): ?>
                
                <div class="column is-full-mobile is-half-tablet is-one-third-desktop is-one-third-widescreen is-one-third-fullhd">
                        <a href="/grafiz-site/Works/show/<?= $value->getId(); ?>">
                                <div class="card">

                                <?php $class = ($value->getCategorie() == 'retouche') ? 'retouche' : ''; ?>
                                
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
        
        
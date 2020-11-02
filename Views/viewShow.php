<section class="hero is-black">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>

        <div class="hero-body">
               
                <!-- <div class="container">  -->
                        <!-- <div class=""> -->
                                <div class="columns is-vcentered">
                                        <!-- <div class="column is-1"></div> -->



                                        <div class="column is-1">
                                                <a href="/grafiz-site/works">
                                                        <span class="previous icon is-large">
                                                                 <i class="fas fa-reply"></i>
                                                        </span>
                                                </a>
                                        </div>
                                        <div class="column has-text-centered">
                          
                                                <!-- TITRE DE LA PAGE -->
                                                <!-- <div>  -->
                                                        <h1 class="">
                                                                <?= ucfirst($work->getNom()); ?>
                                                                <span class="title is-4 mt-1"><?= strtoupper($work->getCategorie()); ?></span>
                                                        </h1>
                                                        
                                                        
                                                        <!-- </div> -->
                                                        <!-- FIN DU TITRE DE LA PAGE -->
                                                </div>
                                                <div class="column is-1"></div>
                                                
                                                
                                        </div>
                                        <!-- </div> -->
                                </div>
                                
                        </section>
                        
                        
                        
                        <?php 
                        // debug(gettype($work->getCategorie()));
                        $array = $work->getImgs();
                        // je retire la 1ère img du tableau, elle sera la 1ère image de présentation 
                        $first = array_shift($array);
                        ?>
                                <section class="section show">
                                        <!-- <div class="container"> -->
                                        <div class="columns is-multiline">
                                                <div class="column is-full-mobile is-12-tablet is-12-desktop is-6-widescreen first-img has-text-centered">
                                                        <?php $class = ($work->getCategorie() == 'retouche') ? 'retouche' : ''; ?>
                                                        <figure class="<?= $class; ?>">
                                                                <img src="<?= $first;?>" alt="<?= $work->getNom(); ?>" class=''>
                                                        </figure>
                                                        
                                                </div>
                                                
                                                <div class="column is-full-mobile is-12-tablet is-12-desktop is-6-widescreen is-5-fullhd description has-text-left" style="">
                                                        
                                                        <!-- Icons Adobe -->
                                                        <article class="media has-background-white-ter">
                                                                <?php if($work->getIcons()): ?>
                                                                        <div class="media-left mb-3">
                                                                                <?php foreach($work->getIcons() as $key): ?>
                                                                                <figure class="image is-48x48 mr-2">
                                                                                        <img src="<?= $key['path'];?>" alt="logo Adobe <?= $key['name']; ?>">
                                                                                </figure>
                                                                                <?php endforeach ?>  
                                                                        </div>
                                                                <?php endif; ?>


                                                                <div class="media-content">
                                                                        <div class="content">
                                                                                <div class="columns">
                                                                                        <div class="column is-narrow toto">
                                                                                                <?php if($work->getClient()): ?>
                                                                                                <p>
                                                                                                        <b>Client : </b>
                                                                                                        <br>
                                                                                                        <?= $work->getClient(); ?>   
                                                                                                        <br><br>
                                                                                                        <? endif; ?>
                                                                                                        <b>Catégorie : </b>  
                                                                                                        <br>
                                                                                                        <strong><?= $work->getCategorie(); ?></strong>
                                                                                                </p> 
                                                                                                
                                                                                        </div>
                                                                                                
                                                                                        <div class="column">
                                                                                                <p> 
                                                                                                        <?php $description = $work->getDescription();?>
                                                                                                
                                                                                                        <b>Description : </b>  
                                                                                                        <br>
                                                                                                        <!-- si la 1ère clé commence direct par une chaine vide(null) c'est qu'il n'y a pas de texte descriptif avant la liste à puces -->
                                                                                                        
                                                                                                        <?php if($description[0] == null): ?>
                                                                                                        <ul>
                                                                                                                <?php foreach($description as $li): ?>
                                                                                                                <li><?= $li; ?></li>
                                                                                                                <?php endforeach; ?>
                                                                                                        </ul>
                                                                                                        <?php else: ?>
                                                                                                        <!-- array_shift pr empècher  -->
                                                                                                        <?= array_shift($description); ?>
                                                                                                        <ul>
                                                                                                                <?php foreach($description as $li): ?>
                                                                                                                <li><?= $li; ?></li>
                                                                                                                <?php endforeach; ?>
                                                                                                        </ul>                      
                                                                                                        <?php endif; ?>
                                                                                                        
                                                                                                </p>     
                                                                                                <!-- <br> -->
                                                                                        </div>
                                                                                </div>
                                                                                
                                     
                                                                                
                                                                        </div>
                                                                        
                                                                </div>
                                                        </article>
                                                        
                                                </div>
                                                <!-- <div class="column is-1"></div> -->
                                        </div>
                                        </div>
                                        
                                        
                                        
                
                                      
                          
                                        <?php if(count($array) > 1): ?>
                                        
                                                <div class="columns works is-multiline is-variable is-0-mobile">  
                                                        <?php
                                                        // chaque .column positionne la 1ère image à droite et la 2eme à gauche
                                                 
                                                        // debug($array);

                                                        foreach($array as $key): ?>

                                                                <div class="column item-position is-12-mobile is-12-tablet is-12-desktop is-6-widescreen has-text-centered">
                                                                        <div class="box">
                                                                                <figure>
                                                                                        <img src="<?= $key;?>" alt="Image">
                                                                                </figure>
                                                                        </div>
                                                                </div>
                                                  
                                                        <?php endforeach ?>
                                                </div>
                                        <?php elseif(count($array) == 1): ?>
                                            
                                                <div class="columns has-text-centered">
                                                        <div class="column">
                                                                <div class="box">
                                                                                <figure>
                                                                                        <img src="<?= $array[0];?>" alt="Image">
                                                                                </figure>
                                                                </div>
                                                        </div>
                                                </div>


                                        <?php endif; ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                </section>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
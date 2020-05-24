<section class="section categorie">
    
    <div class="container is-fullhd">
        
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
        
    </div>
    
</section>    






<section class="section works">
    
    
    <div class="columns is-mobile is-gapless is-multiline has-text-centered">
        <?php
        foreach($post as $key => $value){ ?>
            
            <div class="column is-half-mobile is-one-third-tablet is-one-third-desktop is-one-fifth-widescreen">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-256x256"> 
                            <a href="#">
                               
                                <img src="<?= $value->getImg_show();?>" alt="<?= $value->getNom();?>">  
                                <figcaption>
                                    <h2 class="title is-size-6-mobile is-size-5-tablet is-size-7-widescreen is-size-5-fullhd"><?= strtoupper($value->getNom());?></h2>         
                                    <p class="title is-size-7 is-size-6-tablet is-primary"><?= strtoupper($value->getCategorie());?></p>         
                                </figcaption>
                           
                            </a> 
                        </figure>
                    </div>
                </div>
            </div>
            
            <?php } ?>
            
            
            
        </div>
        
        
    </section>       
    
    
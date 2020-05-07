<section class="section is-primary">

        <div class="container is-widescreen">

                <h3 class="title is-1 has-text-centered title-category">My works</h3>
      
                        <div class="columns is-desktop">
                                <?php foreach($post as $work) { ?>   
                                
                                        <div class="column is-mobile-4">
                                
                                                <figure class="image is-fullwidth" width="150%" height="150%">
                                                        <img src="<?= $work->getFirst_img();?>" alt="img">
                                                </figure>
                                        </div>
                                <?php 
                                } 
                                ?>
                        </div>
                        
                        <div class="columns is-desktop">
                                <?php foreach($post as $work) { ?>   
                                
                                        <div class="column is-mobile-4">
                                
                                                <figure class="image is-fullwidth" width="150%" height="150%">
                                                        <img src="<?= $work->getFirst_img();?>" alt="img">
                                                </figure>
                                        </div>
                                <?php 
                                } 
                                ?>
                        </div>

        </div>

        
                       
       
  
              
</section>       
        
        
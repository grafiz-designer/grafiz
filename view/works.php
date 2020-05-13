<section class="section">
    <!-- <div class="container"> -->
    <!-- </div> -->
   

    <?php
    
    ?>

        <div class="columns is-mobile is-multiline has-text-centered">
        <?php
            foreach($post as $key => $value){ ?>

            <div class="column is-one-fifth-desktop is-one-third-tablet is-half-mobile">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-256x256"> 
                            <img src="<?= $value->getImg_show();?>">    
                        </figure>
                    </div>
                </div>
            </div>
    
        <?php } ?>

            
           
        </div>
        
        
    </section>       
    
    
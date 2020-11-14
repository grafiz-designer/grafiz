<!-- ******************************* FORMULAIRE ************************* -->

<!-- SECTION TITRE DU FORMULAIRE -->
<section class="section title-form is-medium has-background-dark">
    <!-- <div class="container is-fluid"> -->
        <p class="is-size-4-mobile is-size-3-tablet is-size-2-desktop is-size-2-widescreen is-size-2-fullhd has-text-centered">Un projet, <span class="color">une idée ?</span><span class="contact">Contactez-moi<i class="fas fa-envelope"></i></span>
        </p>
    <!-- </div> -->
    <!-- <i class="arrow fas fa-4x fa-angle-down"></i> -->
    <!-- <i class="arrow far fa-3x fa-hand-point-down"></i> -->
    <i class="arrow fas fa-chevron-circle-down"></i>

</section>  




<!-- SECTION FORMULAIRE -->
<section class="section form is-medium" id="ancre-form">
    <?php if(isset($_SESSION['contact'])): ?>
        <div class="notification <?= $_SESSION['contact']['color-contact'] ?>">
            <p><?= $_SESSION['contact']['msg-contact']; ?></p>
        </div>
    <?php endif;?>


    <form action="/grafiz-site/contact/send" method="POST" id="myForm" name="myForm">
        
        <!-- ******* NOM ********** -->
        
        <div class="columns is-centered">
            <div class="column">
                <div class="field">
                    <label class="label" id="nom">Nom</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-medium" name="nom" id="nom" type="text" placeholder="">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <p class="help is-danger is-size-6"><?php if(isset($msg)) echo $msg; ?></p>

                </div>
            </div>
            


            <!-- ******* Email ********** -->
            
            <div class="column">
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-medium" type="email" name="email" placeholder="">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <p class="help is-danger is-size-6"><?php if(isset($msg)) echo $msg; ?></p>
                </div>
            </div> 
        </div>
        
        


        <!-- ******* SUJET ********** -->
        
        <div class="columns">
            <div class="column">
                <div class="field">
                    <!-- je veux rendre invisible le label car il y a un placeholder -->
                    <label class="label" id="sujet">Sujet</label>
                    <div class="control" id="sujet">
                        <input class="input is-medium" name="sujet" id="sujet" type="text" placeholder="ex: création d'un logo">
                    </div>
                    <p class="help is-danger is-size-6"><?php if(isset($msg)) echo $msg; ?></p>
                </div>
            </div>
        </div>



            <!-- ******* Message ********** -->
            
            <div class="columns is-centered">
                <div class="column">
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control has-icons-left">
                            <textarea class="textarea" name="message" placeholder=""></textarea>
                         
                        </div>
                        <p class="help is-danger is-size-6"><?php if(isset($msg)) echo $msg; ?></p>
                    </div>
                </div>
            </div>

            
            <!-- ******* Submit ********** -->
            
            <div class="columns is-centered">
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <input class="button is-primary" value="Envoyer le message" type="submit">
                        </div>
                    </div>
                </div>
            </div>
            

            

    </form>

    </section>
    
    
    
    
    
    
    
    
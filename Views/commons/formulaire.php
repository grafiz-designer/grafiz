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

             <!-- ******* captcha ********** -->
            
            <!-- <div class="columns">
                <div class="column">
                    <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LfF_F0UAAAAAAa8j2xkCtuw339aw-ShR64oxJoG" data-theme="light" data-type="image" data-size="normal" data-badge="bottomright" data-tabindex="0"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfF_F0UAAAAAAa8j2xkCtuw339aw-ShR64oxJoG&amp;co=aHR0cHM6Ly9qZ3RobXMuY29tOjQ0Mw..&amp;hl=en&amp;type=image&amp;v=ADnAC3ZykfbIOflWgrKNsVVT&amp;theme=light&amp;size=normal&amp;badge=bottomright&amp;cb=z995o3ra5shg" width="304" height="78" role="presentation" name="a-ya9lh8vysvz0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                </div>
            </div> -->
            
            <!-- ******* Submit ********** -->
            
            <div class="columns is-centered">
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <input class="button" value="Envoyer le message" type="submit">
                        </div>
                    </div>
                </div>
            </div>
            

            

    </form>

    </section>
    
    
    
    
    
    
    
    
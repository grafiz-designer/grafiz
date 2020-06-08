
<!-- SECTION TITRE DU FORM -->
<section class="section title-form is-medium">
    <div class="container is-fluid">
        <h1 class="title has-text-centered">Un projet, une idée ? <span>Contactez-moi</span></h1>
    </div>
</section>  



<!-- SECTION FORMULAIRE -->
<section class="section form is-medium">
    <form action="#" method="POST"  id="myForm" name="myForm">
        
        <!-- ******* NOM ********** -->
        
        <div class="columns is-centered">
            <div class="column">
                <div class="field">
                    <!-- je veux rendre invisible le label car il y a un placeholder -->
                    <label class="label" id="name">Nom</label>
                    <div class="control" id="name">
                        <input class="input is-medium" name="nom" id="name" type="text" placeholder="icon" required>
                    </div>
                </div>
            </div>
            
            <!-- ******* Email ********** -->
            
            <div class="column">
                <div class="field">
                    <label class="label">Email</label>
                    <p class="control has-icons-left">
                        <input class="input is-medium" type="email" name="email" placeholder="Email" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>
            </div> 
        </div>
        
        
        <!-- ******* SUJET ********** -->
        
        <div class="columns">
            <div class="column">
                <div class="field">
                    <!-- je veux rendre invisible le label car il y a un placeholder -->
                    <label class="label" id="name">Sujet</label>
                    <div class="control" id="name">
                        <input class="input is-medium" name="sujet" id="sujet" type="text" placeholder="icon" required>
                    </div>
                </div>
            </div>
        </div>
            <!-- ******* Message ********** -->
            
            <div class="columns is-centered">
                <div class="column">
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" name="message" placeholder="Textarea" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

             <!-- ******* captcha ********** -->
            
            <div class="columns">
                <div class="column">
                    <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LfF_F0UAAAAAAa8j2xkCtuw339aw-ShR64oxJoG" data-theme="light" data-type="image" data-size="normal" data-badge="bottomright" data-tabindex="0"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfF_F0UAAAAAAa8j2xkCtuw339aw-ShR64oxJoG&amp;co=aHR0cHM6Ly9qZ3RobXMuY29tOjQ0Mw..&amp;hl=en&amp;type=image&amp;v=ADnAC3ZykfbIOflWgrKNsVVT&amp;theme=light&amp;size=normal&amp;badge=bottomright&amp;cb=z995o3ra5shg" width="304" height="78" role="presentation" name="a-ya9lh8vysvz0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                </div>
            </div>
            
            <!-- ******* Submit ********** -->
            
            <div class="columns is-centered">
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <button class="button is-link is-primary" type="submit">Envoyer le message</button>
                        </div>
                    </div>
                </div>
            </div>
            

            
            
        </form>
    </section>
    
    
    
    
    
    
    
    
    
    <!-- on ferme le contenu principal </main> avant le footer -->
    </main>

    <?php require VIEW . "/commons/_form-component.html.php"; ?>

    <footer class="footer">

        <a class="arrow" href="#">
            <img src="<?=ASSETS;?>/icons/arrow-up-circle.svg" alt="arrow">
        </a>




        <div class="columns is-vcentered">
          
            <!-- colonne vide -->
            <div class="column is-2"></div>
            <div class="column is-size-5 has-text-centered">
                    <p class=""><a href="home">Accueil</a></p>
                    <p class=""><a href="works">Works</a></p>
                    <p class=""><a href="services">Services</a></p>
                    <p class=""><a href="tutos">Tutos</a></p>
                    <p class=""><a href="contact">Contact</a></p>
            </div>
              

            <div class="column has-text-centered">
                <p class="title is-2">LOGO</p>
            </div>


            <div class="column has-text-centered">
                <p class="is-size-4-mobile is-size-4-tablet is-size-4-desktop">On se retrouve</p>

                <ul>
                    <li class="is-inline">
                        <a href=""><img src="<?=ASSETS;?>/icons/logo-facebook.svg" class="icon is-medium" alt=""></a>
                    </li>
                    <li class="is-inline">
                        <a href=""><img src="<?=ASSETS;?>/icons/logo-dribbble.svg" class="icon is-medium" alt=""></a>
                    </li>
                    <li class="is-inline">
                        <a href=""><img src="<?=ASSETS;?>/icons/logo-twitter.svg" class="icon is-medium" alt=""></a>
                    </li>
                    <li class="is-inline">
                        <a href=""><img src="<?=ASSETS;?>/icons/logo-facebook.svg" class="icon is-medium" alt=""></a>
                    </li>
                </ul>
            </div>


            <div class="column is-2"></div>
        </div>


        


        <!-- "is-multiline" combiné à "is-12" permet que les 2 colonnes soient imbriquées sur tout  -->
        <div class="columns is-multiline has-text-centered">
            <div class="column is-12">
                <div class="content">
                    <a href="https://bulma.io">
                        <img src="<?=ASSETS;?>/img/bulma-white.png" alt="Made with Bulma and me" width="128" height="24">
                    </a>
                </div>
            </div>
            <div class="column is-marginless">
                <div class="content">
                    <p class="is-size-6">
                        <strong>&copy; Trafixel 2020 |</strong> Tout droit réservés | Mentions légales
                    </p>
                </div>
            </div>
        </div>
        

    </footer>

  
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>


    </body>
    </html>
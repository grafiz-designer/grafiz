    <!-- on ferme le contenu principal </main> avant le footer -->
    </main>

    <?php require VIEW . "/_contactComponent.php" ?>

    <footer class="footer">



        <!-- la fleche a droite -->
        <div class="columns has-text-right">

            <div class="column">
                <a href="#">
                    <img class="arrow" src="<?=ASSETS;?>/icons/arrow-up-circle.svg" alt="arrow">
                </a>
            </div>
            <div class="column is-1"></div>
        </div>




        <div class="columns has-text-centered is-vcentered">
          
            <!-- colonne vide -->
            <div class="column is-1"></div>
            <div class="column is-size-4">
                <p class=""><a href="#">Accueil</a></p>
                <p class=""><a href="#">Works</a></p>
                <p class=""><a href="#">Services</a></p>
                <p class=""><a href="#">Tutos</a></p>
                <p class=""><a href="#">Contact</a></p>
            </div>




            <div class="column">
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





            <div class="column">
                <p class="title is-2">LOGO</p>
            </div>

            <div class="column is-1"></div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="content has-text-centered">
                    <p class="is-size-5 space-word">

                        <strong>&copy; Trafixel 2020 |</strong> Tout droit réservés | Mentions légales
                    </p>
                </div>
            </div>
        </div>






    </footer>






    <!-- <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    </body>

    </html>
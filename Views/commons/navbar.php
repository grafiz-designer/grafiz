<?php if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){ 
        $pseudo = "Bonjour &nbsp;<span class='has-text-warning'>". strtoupper($_SESSION['pseudo']). " </span>&nbsp; vous êtes connecté !" ; 
        $class = 'is-connected';
}; ?>
    
    <!-- is-spaced rajoute par défaut une marge de 1rem pour top et bottom et 2rem pour left et right -->
    <!-- is-fixed-top pr fiwer la nav meme au scroll -->
    <nav class="navbar is-spaced is-fixed-top" role="navigation">
      
      <div class="container">
        <!-- c'est le menu coté gauche toujours visible  -->
        <div class="navbar-brand">
          <a class="navbar-item has-text-left" href="/grafiz-site/accueil">
            <?php require ROOT . "/assets/img/SVG/logo-grafiz.php";?>
            
          </a>
          
          
          <!-- l'icone burger doit tjrs etre le dernier enfant de navbar-brand -->
          <a role="button" class="navbar-burger is-large" data-target="menu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        
        
        <!-- le menu caché il doit etre un enfant direct de "navbar"-->
        <div class="navbar-menu" id="menu">
        <div class="navbar-start">
            <div class="navbar-item has-text-weight-bold has-text-white is-size-7-tablet is-size-6-widescreen"> 
              <?php if(isset($pseudo)) echo $pseudo; ?></div>
            </div>
            <div class="navbar-end">
              <a href="/grafiz-site/accueil" class="navbar-item is-size-5">Accueil</a><hr>
              <a href="/grafiz-site/works" class="navbar-item is-size-5">Works</a><hr>
              <a href="/grafiz-site/about" class="navbar-item is-size-5">About</a><hr>
              <a href="/grafiz-site/tutos" class="navbar-item is-size-5">Tutos</a><hr>
              <a href="/grafiz-site/contact" class="navbar-item is-size-5">Contact</a><hr>
            
            <div class="navbar-item has-text-centered-desktop">
              <a href="#">
                <span class="icon is-medium">
                  <i class="fab fa-lg fa-facebook-square"></i>
                </span>
              </a>
              
              <a href="#">
                <span class="icon is-medium">
                  <i class="fab fa-lg fa-instagram"></i>
                </span>
              </a>
              
              <a href="#">
                <span class="icon is-medium">
                  <i class="fab fa-lg fa-twitter-square"></i>
                </span>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </nav>
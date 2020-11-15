<?php if(isset($_SESSION['pseudo'])){ 
        $isLogin = "Déconnexion" ; 
        $class = 'is-connected';
}; ?>
    

    <!-- is-spaced rajoute par défaut une marge de 1rem pour top et bottom et 2rem pour left et right -->
    <!-- is-fixed-top pr fiwer la nav meme au scroll -->
    <nav class="navbar" role="navigation">
      
      <div class="container">
        <!-- c'est le menu coté gauche toujours visible  -->
        <div class="navbar-brand">
          <a class="logo navbar-item has-text-left" href="/grafiz-site/accueil">
            <?php require ROOT . "/assets/img/SVG/logo-grafiz.php";?> 
          </a>

          <?php if(isset($isLogin)): ?>

            <div class="login is-danger is-medium ml-4 mt-3 has-text-danger has-text-weight-bold">
              <?php if(isset($isLogin)) echo $isLogin; ?>
            <a class="delete has-background-danger is-medium" href=<?php echo "/grafiz-site/".$this->page."/logout"; ?>></a>
          </div>

          <?php endif; ?>
          

          <!-- l'icone burger doit tjrs etre le dernier enfant de navbar-brand -->
          <a role="button" class="navbar-burger is-large" data-target="menu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        
        
        <!-- le menu caché il doit etre un enfant direct de "navbar"-->
        <div class="navbar-menu" id="menu">

          <div class="navbar-end">
            <a href="/grafiz-site/accueil" class="navbar-item is-size-5 <?php if($this->page == 'Accueil') echo 'link-active'; ?>">Accueil</a>
            <hr>
            <a href="/grafiz-site/works" class="navbar-item is-size-5 <?php if($this->page == 'Works') echo 'link-active'; ?>">Works</a>
            <hr>
            <a href="/grafiz-site/about" class="navbar-item is-size-5 <?php if($this->page == 'About') echo 'link-active'; ?>">About</a>
            <hr>
            <a href="/grafiz-site/tutos" class="navbar-item is-size-5 <?php if($this->page == 'Tutos') echo 'link-active'; ?>">Tutos</a>
            <hr>
            <a href="/grafiz-site/contact" class="navbar-item is-size-5 <?php if($this->page == 'Contact') echo 'link-active'; ?>">Contact</a>
            <hr>
            
            <div class="navbar-item has-text-centered-desktop">
              <a href="#" title="facebook">
                <span class="icon is-medium">
                  <i class="fab fa-lg fa-facebook-square"></i>
                </span>
              </a>
              
              <a href="#" title="instagram">
                <span class="icon is-medium">
                  <i class="fab fa-lg fa-instagram"></i>
                </span>
              </a>
              
              <a href="#" title="behance">
                <span class="icon is-medium">
                  <i class="fab fa-lg fa-behance-square"></i>
                </span>
              </a>

              <a href="#" title="dribble">
                <span class="icon is-medium">
                  <i class="fab fa-lg fa-dribbble"></i>
                </span>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </nav>
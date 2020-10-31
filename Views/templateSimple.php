<?php require ROOT. '/Views/commons/head.php';?>


    <!-- is-spaced rajoute par défaut une marge de 1rem pour top et bottom et 2rem pour left et right -->
    <!-- is-fixed-top pr fiwer la nav meme au scroll -->
    <nav class="navbar is-primary is-spaced" role="navigation">
      
      <div class="container">
        <!-- c'est le menu coté gauche toujours visible  -->
        <div class="navbar-brand" data-aos="fade-down-right">
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
          
          <div class="navbar-end">
            <a href="/grafiz-site/accueil" class="navbar-item is-size-5">
              <i class="fas fa-lg fa-home"></i>
            </a><hr>
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



  <!-- <main> indique le contenu qui appartient exclusivement à cette page, il doit démarrer après le <header> et le terminer avant le <footer>, elle a un id de manière dynamique afin de styliser chaque pages-->
  <main role="main" id="page-<?= $this->page;?>">

    <?= $content; ?>
    
  </main>


  <?php require ROOT. '/Views/commons/footer.php';?>

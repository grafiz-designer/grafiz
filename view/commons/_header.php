<header class="header">
    <!-- is-spaced rajoute par défaut une marge de 1rem pour top et bottom et 2rem pour left et right -->
    <!-- is-fixed-top pr fiwer la nav meme au scroll -->
    <nav class="navbar is-primary is-spaced is-fixed-top" role="navigation">
        
            <!-- c'est le menu coté gauche toujours visible  -->
            <div class="navbar-brand" data-aos="fade-down-right">
                <a class="navbar-item has-text-left" href="index.php">
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
                    <a href="home" class="navbar-item is-size-5">Home</a><hr>
                    <a href="works" class="navbar-item is-size-5">Works</a><hr>
                    <a href="about" class="navbar-item is-size-5">About</a><hr>
                    <a href="tutos" class="navbar-item is-size-5">Tutos</a><hr>
                    <a href="contact" class="navbar-item is-size-5">Contact</a><hr>
                    <div class="navbar-item has-text-centered-desktop">
                        <a href="#">
                            <img src="<?=ASSETS;?>/icons/logo-twitter.svg" class='txit icon is-medium' alt="logo-twitter">
                            
                        </a>
        
                        <a href="#">
                            <img src="<?=ASSETS;?>/icons/logo-facebook.svg" class='icon is-medium' alt="logo-facebook">
                        </a>  
        
                        <a href="#">
                            <img src="<?=ASSETS;?>/icons/logo-dribbble.svg" class='icon is-medium' alt="logo-dribble">
                        </a>  
                    </div>
                    
                </div>
            </div>
    </nav>
  

    
    <section class="hero has-text-centered <?= $heightHero;?>">
        <div class="hero-body">
            <div class='container'>
                
                <?= $heroTitle; ?>
                
            </div>
        </div>
    </section>


    <div class="chevron"></div>


  <section class="wave-container">
    <div class="wave wave1"></div> 
    <div class="wave wave2"></div> 
    <div class="wave wave3"></div> 
    <div class="wave wave4"></div> 
  </section>

</header>





<!-- <main> indique le contenu qui appartient exclusivement à cette page, il démarre après le <header> et le termine avant le <footer> -->
<main role="main">



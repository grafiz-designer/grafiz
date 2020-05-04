<header class="header">
    <!-- is-spaced rajoute par défaut une marge de 1rem pour top et bottom et 2rem pour left et right -->
    <!-- is-fixed-top pr fiwer la nav meme au scroll -->
    <nav class="navbar is-primary is-spaced" role="navigation">
        
            <!-- c'est le menu coté gauche toujours visible  -->
            <div class="navbar-brand" data-aos="fade-down-right">
                <a class="navbar-item has-text-left" href="index.php">
                    <?php require ROOT . "/assets/img/SVG/logo-grafiz.php";?>
                </a>
                
                <!-- l'icone burger doit tjrs etre le dernier enfant de navbar-brand -->
                <a role="button" class="navbar-burger" data-target="menu" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            
            <!-- le menu caché il doit etre un enfant direct de "navbar"-->
            <div class="navbar-menu" id="menu">
                
                <div class="navbar-end">
                    <a href="home" class="navbar-item is-size-4">Home</a><hr>
                    <a href="works" class="navbar-item is-size-4">Works</a><hr>
                    <a href="services" class="navbar-item is-size-4">Services</a><hr>
                    <a href="tutos" class="navbar-item is-size-4">Tutos</a><hr>
                    <a href="contact" class="navbar-item is-size-4">Contact</a><hr>
                    <div class="navbar-item has-text-centered-desktop">
                        <a href="#">
                            <img src="<?=ASSETS;?>/icons/logo-twitter.svg" class='icon is-medium' alt="logo-twitter">
                            
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
  

    <section class="hero has-text-centered is-large is-primary">
        <div class="hero-body">
            <div class="container">
                <!-- ici un grand hero pr le logo centré accompagé des animations css -->
                <h1 class="is-spaced">
            

                    <?php require ROOT . "/assets/img/SVG/logo-grafiz.php";?>
                </h1>
                <!-- "data... c'est l'animation de la page lors du scroll -->
                <h2 class="is-spaced subtitle is-size-7-mobile is-size-4-desktop has-text-centered"
                    data-aos="fade-up" 
                    data-aos-anchor-placement="bottom-bottom">
                    
                    <span class="is-block">MOTION</span>
                    <span class="is-block">ILLUSTRATION</span>
                    <span class="is-block">GRAPHISME</span>
                </h2>

                

            </div>
        </div>
        
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L120,133.3C240,171,480,245,720,240C960,235,1200,149,1320,106.7L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,420,120,320L0,320Z"></path></svg> -->
        
       
    </section>
    <div class="chevron"></div>

    <!-- <div class="clouds">
        <img src="<?=ASSETS;?>/img/cloud1.png" alt="" style="--i:1;" />
        <img src="<?=ASSETS;?>/img/cloud2.png" alt="" style="--i:2;" />
        <img src="<?=ASSETS;?>/img/cloud3.png" alt="" style="--i:3;" />
        <img src="<?=ASSETS;?>/img/cloud4.png" alt="" style="--i:4;" />
        <img src="<?=ASSETS;?>/img/cloud5.png" alt="" style="--i:5;" />
        </div> -->
  <section>
    <div class="wave wave1"></div> 
    <div class="wave wave2"></div> 
    <div class="wave wave3"></div> 
    <div class="wave wave4"></div> 
  </section>

</header>





<!-- <main> indique le contenu qui appartient exclusivement à cette page, il démarre après le <header> et le termine avant le <footer> -->
<main role="main">



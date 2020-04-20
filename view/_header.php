<header class="header">
    <!-- is-spaced rajoute par défaut une marge de 1rem pour top et bottom et 2rem pour left et right -->
    <nav class="navbar is-primary is-spaced is-fixed-top" role="navigation">
        
            <!-- c'est le menu coté gauche toujours visible  -->
            <div class="navbar-brand is-white">
                <a href="#" class="navbar-item is-white">
                    <img src="<?=ASSETS;?>/icons/logo-twitter.svg" class='icon is-medium' alt="logo-twitter">
                </a>

                <a href="#" class="navbar-item">
                    <img src="<?=ASSETS;?>/icons/logo-facebook.svg" class='icon is-medium' alt="logo-facebook">
                </a>  

                <a href="#" class="navbar-item">
                    <img src="<?=ASSETS;?>/icons/logo-dribbble.svg" class='icon is-medium' alt="logo-dribble">
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
                    <a href="#" class="navbar-item is-size-4">Home</a>
                    <a href="#" class="navbar-item is-size-4">Works</a>
                    <a href="#" class="navbar-item is-size-4">Services</a>
                    <a href="#" class="navbar-item is-size-4">Tutos</a>
                    <a href="#" class="navbar-item is-size-4">Contact</a>
                </div>
            </div>

    </nav>
  



    <section class="hero has-text-centered is-primary is-large">
        <div class="hero-body">
            <div class="container">
                <!-- ici un grand hero pr le logo centré accompagé des animations css -->
                <h1 class="title is-1 is-spaced">Logo</h1>
                <h2 class="subtitle is-size-6-mobile is-size-4-desktop has-text-centered">
                    
                    <span class="is-block">MOTION</span>
                    <span class="is-block">ILLUSTRATION</span>
                    <span class="is-block">GRAPHISME</span>
                </h2>
           
            </div>
        </div>
    </section>

</header>





<!-- <main> indique le contenu qui appartient exclusivement à cette page, il démarre après le <header> et le termine avant le <footer> -->
<main role="main">



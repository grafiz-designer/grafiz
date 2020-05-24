<?php
namespace Classes;


class View {
    
    private $_view;
    
    public function __construct(string $view){
        
        $this->_view = $view;
    }
    public function getView(){
        return $this->_view;
    }

    public function setHeightHero(string $view){
        if($view !== 'home'){

            $heightHero = 'is-medium';

        }else{
            $heightHero = 'is-large';
        }
        return $heightHero;
    }
    
    public function setHeroTitle(string $view){
        if($view !== 'home'){
            // je ne rajoute pas de span 'my' sur le titre 'about' et 'contact'
            if(($view == 'about') || ($view == 'contact')){

                $span = null;

            }else{

                $span = "<span class='is-size-4-mobile'>my</span>";
                
            }
            
            ob_start();
            ?>
            <div class="container-title">
                <?= $span; ?>
                <h1 class="is-spaced has-text-white separate title is-size-3-mobile is-size-1-tablet is-size-1-desktop">
                <?= ucfirst($view); ?>
                </h1>
            </div>
            
            <style>
            .wave-container{
                display: none;
            }
            </style>
            
            <?php
            
            $heroTitle = ob_get_clean();
            
        // sinon c'est le hero de la page d'accueil
        }else{
            
            ob_start();
            
            ?>
            <h1 class="is-shakes is-spaced">
            <?php require ROOT . "/assets/img/SVG/logo-grafiz.php";?>
            </h1>
            <h2 class='subtitle has-text-white is-marginless is-size-6-mobile is-size-4-desktop has-text-centered' data-aos='fade-up' data-aos-anchor-placement='bottom-bottom'>
            <span class='is-block'>Motion</span>
            <span class='is-block'>Illustration</span>
            <span class='is-block'>Graphisme</span>
            </h2>
            <?php
            
            $heroTitle = ob_get_clean();
            
        }
        
        return $heroTitle;
    }
    
    
    public function render($post = null){
        
        $heroTitle = $this->setHeroTitle($this->_view);
        $heightHero = $this->setHeightHero($this->_view);
        
        ob_start();
        require VIEW . "/" . $this->_view . ".php";
        $content = ob_get_clean();
        require VIEW  . '/template.php';
    }
    
}
?>
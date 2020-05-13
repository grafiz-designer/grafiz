<?php
namespace Classes;


class View {
    
    private $_view;

    public function __construct($view){

        $this->_view = $view;
    }

    public function setHeroTitle($view){
        
        if($view !== 'home'){

            ob_start();
            ?>
            <h1 class="is-spaced separate title is-size-3-mobile is-size-1-tablet is-size-1-desktop"><?= ucfirst($view); ?></h1>
            <?php

            $heroTitle = ob_get_clean();

        }else{
     
            ob_start();

            ?>
            <h1 class="is-spaced">
                <?php require ROOT . "/assets/img/SVG/logo-grafiz.php";?>
            </h1>
            <h2 class='subtitle is-marginless is-size-6-mobile is-size-4-desktop has-text-centered' data-aos='fade-up' data-aos-anchor-placement='bottom-bottom'>
                <span class='is-block'>Motion</span>
                <span class='is-block'>Illustration</span>
                <span class='is-block'>Graphisme</span>
            </h2>
            <?php

            $heroTitle = ob_get_clean();

        }

        return $heroTitle;
    }


    public function render($post){
        
        $heroTitle = $this->setHeroTitle($this->_view);

        ob_start();
        require VIEW . "/" . $this->_view . ".php";
        $content = ob_get_clean();
        require VIEW  . '/template.php';
    }

}
?>
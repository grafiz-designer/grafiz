<?php
namespace Classes;


abstract class Controller
{
  protected $modelName;
  protected $model;
  protected $view;
  

  public function __construct()
  {
    if(!$this->modelName == null){
        $namespaceModel = "Models\\" . $this->modelName;
        $this->model = new $namespaceModel();
    }
  }



  /**
   * Définit la hauteur du héro qui est la même sur toutes les pages sauf celle de la 'home'
   * 
   * @return string
   */
  public function setHeightHero(): string
  {
      $view = $this->view;
      
      if($view !== 'home'){
          $heightHero = 'is-medium';
      }else{
          $heightHero = 'is-large';
      }
      return $heightHero;
  }




  /**
   * Définit le titre principal dans le header selon le controlleur en question
   * 
   * @return string
   */
  public function setHeroTitle()
    {
        $view = $this->view;

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
            <style>.wave-container{display: none;}</style>
            
            <?php
            
            $heroTitle = ob_get_clean();
            
        // sinon c'est le hero de la page d'accueil
        }else{
            
            ob_start();
            
            ?>
            <h1 class="is-shakes is-spaced">
                <?php require ROOT . "/assets/img/SVG/logo-grafiz.php";?>
            </h1>
            <h2 class='subtitle has-text-white is-size-6-mobile is-size-4-desktop has-text-centered' data-aos='fade-up' data-aos-anchor-placement='bottom-bottom'>
                <!-- <span class='is-block'>Motion</span>
                <span class='is-block'>Illustration</span>
                <span class='is-block'>Graphisme</span> -->
                <ul>
                    <li>Motion -</li>
                    <li>Illustration</li>
                    <li class="is-shakes">Graphisme</li>
                </ul>
            </h2>
            <?php
            
            $heroTitle = ob_get_clean();
            
        }
        
        return $heroTitle;
    }
    
    



  /**
   * génère la vue avec comme paramètre la requete en BDD(optionnel)
   * 
   * @return void
   */
  public function render(array $data = null): void
  {

    $heightHero = $this->setHeightHero();
    $heroTitle = $this->setHeroTitle();

    ob_start();
    require VIEW . $this->view . ".html.php";
    $content = ob_get_clean();
    require VIEW  . 'template.html.php';
  }
  
  
}
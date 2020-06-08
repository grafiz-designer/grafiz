<?php
namespace Classes;


abstract class Controller
{
  protected $modelName;
  protected $model;
  protected $view;
  

  public function __construct()
  {
    // seulement si le controlleur a besoin d'un modèle alors on instancie un modèle au meme nom qui se trouve dans "$modelName"
    if(!$this->modelName == null){
        $nameSpaceModel = "Models\\" . $this->modelName;
        $this->model = new $nameSpaceModel();
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
        return $heightHero = ($view !== 'home') ? 'is-medium' : 'is-large';
  }



  /**
   * Définit le titre principal dans le header selon le controlleur en question
   * 
   * @return string
   */
  public function setHeroTitle(): string
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
            <div class="columns">
                <div class="column is-4 is-offset-3">

                <h2 class='titi subtitle has-text-white has-text-centered'>
                <!-- <span class='is-block'>Motion</span>
                <span class='is-block'>Illustration</span>
                <span class='is-block'>Graphisme</span> -->
                Motion - Graphisme - Illustration
                <!-- <ul>
                    <li>Motion -</li>
                    <li>Graphisme</li>
                    <li>Illustration</li>
                    
                </ul> -->
            </h2>
                </div>
            </div>
            
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
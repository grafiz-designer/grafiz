<?php
namespace Controllers;
use Models\WorksManager;


class ControllerAccueil extends Controller
{
  private $_workManager;
  private $_view;
  protected $file;
  protected $title;
  protected $page = "Accueil";
  protected $metaDescription = "Graphiste freelance basé sur Paris en Ile-de-France, spécialiste en communication visuelle, je vous accompagne et je me charge de la conception d'éléments graphique tel que des logotypes, charte graphique, typographies, packagings, affiches, illustrations et de la création de Web Design (UI Design)";
  protected $heightHero;
  protected $heroTitle;


  public function __construct($url)
  {
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = $this->page. parent::TEXT_COMMUN;
    $this->heightHero = $this->generateHeightHero();
    $this->heroTitle = $this->generateHeroTitle();

    if (isset($url) && count($url) > 1) {
      throw new \Exception("Page introuvable", 1);
    }
    else {
      $this->index();
    }


  }


  public function index(){
    $this->works();
  }



  private function works(){
    
    $this->_workManager = new WorksManager();
    $works = $this->_workManager->getSpecificWorks('works', 'work');

    // 1er arg : le contenu à afficher
    // 2eme arg : le template 
    $this->render(array('works' => $works));
  }

}

// class ControllerAccueil extends Controller
// {
//   protected $modelName = "WorksManager";
//   protected $view = "accueil";

//   public function index()
//   {
//     $works = $this->model->findSpecificWorks();

//     $this->render('accueil', [], $works);
//   }
  
// }






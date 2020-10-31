<?php
namespace Controllers;
use Views\View;



class ControllerAbout extends Controller
{
  private $_workManager;
  private $_view;
  protected $title;
  protected $page = "About";
  protected $metaDescription = 'Découvrez mes domaines d\'expertises autour du graphisme, l\'illustration et l\'intégration Web';
  protected $heightHero;
  protected $heroTitle;


  public function __construct($url){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = $this->page. parent::TEXT_COMMUN;

    if (isset($url) && count($url) > 1) {
      header('Location: /grafiz-site/about');
      throw new \Exception("Page introuvable", 1);
      exit;
    }
    else {
      $this->index();
    }
  }


  public function index(){

    $this->render();
  }


  
}

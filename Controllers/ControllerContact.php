<?php
namespace Controllers;




class ControllerContact extends Controller
{
  private $_workManager;
  private $_view;
  protected $file;
  protected $title;
  protected $page = "Contact";
  protected $metaDescription = 'Vous pouvez me contacter pour un projet graphique, une collaboration ou toutes autres demandes';
  protected $heightHero;
  protected $heroTitle;


  public function __construct($url){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = $this->page. parent::TEXT_COMMUN;
    $this->description = 'toto le beau';
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

    $this->render();
  }
  
}

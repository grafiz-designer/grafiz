<?php
namespace Controllers;
use Models\WorksManager;




class ControllerWorks extends Controller
{
  private $_workManager;
  private $_view;
  protected $file;
  protected $title;
  protected $page = 'Works';
  protected $metaDescription = 'Découvrez mon portfolio autour du graphisme, du web design et du digital painting. Mon Book contient diverses réalisations tel que la création d\'identité de marque, de packaging, de covering, de compositing, de design d\'interface Web (UI Design) et de digital painting';
  protected $heightHero;
  protected $heroTitle;


  public function __construct($params){
    
    $this->title = $this->page. parent::TEXT_COMMUN;

    if($params){
      if(array_search('logout', $params)){
        $this->logout();
      }else{
        $action = array_shift($params);
        $id = array_shift($params);

        if(method_exists($this, $action)){
        $this->$action($id);
      }
      }

      
    }else{
      $this->index();
    }

  
}


  public function index(){
    // affiche tous les works 
    $this->_workManager = new WorksManager();
    $works = $this->_workManager->getWorks();

    $this->file = 'Views/viewWorks.php';
    $this->render(array('works' => $works), 'Views/template.php');
  }




  public function show($id){
    // affiche un work avec son id
    $this->_workManager = new WorksManager();
    // pr avoir accès direct au tableau sans passer par la clé [0]
    $work = $this->_workManager->getWork($id)[0];
  
    $this->title = $work->getCategorie().' | '.$work->getNom(). parent::TEXT_COMMUN;
    $this->metaDescription = $work->getDescription()[0];

    
    // $this->page = "Show";
    $this->file = 'Views/viewShow.php';
    $this->render(array('work' => $work));
   
    
  }



 
  
}

<?php
namespace Controllers;
use App\Form;
use Models\ContactManager;


class ControllerContact extends Controller
{
  private $_contactkManager;
  private $_contacts;
  private $_view;
  protected $file;
  protected $title;
  protected $page = "Contact";
  protected $metaDescription = 'Vous pouvez me contacter pour un projet graphique, une collaboration ou toutes autres demandes';
  protected $heightHero;
  protected $heroTitle;
  public $msg = false;
  public $success = false;

  public function __construct($param){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = $this->page. parent::TEXT_COMMUN;
    // $this->description = 'toto le beau';
    $this->heightHero = $this->generateHeightHero();
    $this->heroTitle = $this->generateHeroTitle();

    if ($param) {
      $action = array_shift($param);
      if(method_exists($this, $action)){
        $this->$action();
      }
    }
    else {
      $this->index();
    }
  }


  public function index(){

    $this->render();
    unset($_SESSION['contact']);
  }
  






  public function send(){
    // apres avoir sécurisé le form, j'extrais les valeurs en variables
    $reponse = Form::isValid($_POST);
    // session_destroy();
    if($reponse['success'] == true){
      $contactManager = new ContactManager();
      $contactManager->insertContact($reponse['post']);
      $contactManager->sendEmail($reponse['post']);
      $_SESSION['contact'] = $reponse;
      // $_POST = array();
      // debug($GLOBALS);
      // debug($GLOBALS['_POST']);
      //  $toto = $reponse;
      // $this->render();
      header('Location: /grafiz-site/contact#ancre-form');
     
      // exit;
      



    }else{
      // debug($reponse);
      $_SESSION['contact'] = $reponse;
      // $_SESSION['contact']['post'] = null;
      header('Location: /grafiz-site/contact#ancre-form');
      
    }


  }
  
}

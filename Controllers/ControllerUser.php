<?php
namespace Controllers;
use Models\ContactManager;
use Models\UserManager;




class ControllerUser extends Controller
{
  private $msg = "";
  private $_loginManager;
  private $_view;
  protected $file;
  protected $title;
  protected $page = "User";
  protected $Description;
  protected $heightHero;
  protected $heroTitle;
  

  public function __construct(){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = $this->page. parent::TEXT_COMMUN;
    // $this->description = 'toto le beau';
    // $this->heightHero = $this->generateHeightHero();
    // $this->heroTitle = $this->generateHeroTitle();

    if (isset($url) && count($url) > 1) {
      throw new \Exception("Page introuvable", 1);
    }
    else {
      $this->index();
    }
  }


  
  public function index(){
    $this->login();

    $this->renderSimple();
  }





  // si le formulaire a été soumis
  public function login(){
    if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) 
    && isset($_POST['pass']) && !empty($_POST['pass']))
    {
      $this->_loginManager = new UserManager();
      $admin = $this->_loginManager->getUser();
      // debug($admin[0]);
      extract($admin[0]);

      $isPseudoCorrect = ($_POST['pseudo'] === $pseudo) ? true : false;
      $isPassCorrect = password_verify($_POST['pass'], $pass);

      if($isPseudoCorrect && $isPassCorrect){
        $_SESSION['pseudo'] = $_POST['pseudo'];
        // $this->msg = 'Bonjour Grafiz, vous êtes connecté !';
      }else{

      }


    //     $contact = new Contact();

    //     $contacts = $contact->model->findAll();
    //     debug($contacts);

    //   }else{
    //     $this->msg = 'Mauvais identifiant ou mot de passe !';
    //   }
    // }
   
    // // $this->render();
    }
  }

  public function logout(){
    "echo vs etes deconnecté";
  }


  
}


<?php
namespace Controllers;
use Models\ContactManager;
use Models\UserManager;
use App\Form;



class ControllerAdmin extends Controller
{
  // private $msgAdmin = "";
  public $notification;
  private $_loginManager;
  private $_view;
  protected $file;
  protected $title;
  protected $page = "Admin";
  protected $Description;
  protected $heightHero;
  protected $heroTitle;
  

  public function __construct($param){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = 'Grafiz - Admin';
    // $this->description = 'toto le beau';
    // $this->heightHero = $this->generateHeightHero();
    $this->heroTitle = $this->generateHeroTitle();

    if ($param){
      $action = array_shift($param);
      if(method_exists($this, $action)){
        $this->$action();
      }
    }else{
      $this->index();
    }
  }


  
  public function index(){
    // $this->login();

    $this->renderSimple();
  }





  // si le formulaire a été soumis
  public function login(){
  
    if(Form::secureForm($_POST)){
     
      $this->_loginManager = new UserManager();
      $admin = $this->_loginManager->getUser();
      // debug($admin[0]);
      extract($admin[0]);

      $isPseudoCorrect = ($_POST['pseudo'] === $pseudo) ? true : false;
      $isPassCorrect = password_verify($_POST['pass'], $pass);

      if($isPseudoCorrect && $isPassCorrect){
 
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['msg'] = "Bonjour Grafiz vous êtes connecté";
        $_SESSION['color'] = "is-primary";
        // je redirige vers la page Admin pr éviter le renvoi du formulaire quand j'actualise la page
        header('Location: /grafiz-site/admin');
        // exit;
   
      }else{
      
        header('Location: /grafiz-site/admin');
        $_SESSION['msg'] = "Mauvais identifiant ou mot de passe";
        $_SESSION['color'] = "is-danger";
        // exit;
        // $_SESSION['msg'] = "Mauvais identifiant ou mot de passe";
        // $_SESSION['color'] = "is-danger";
      }

    }
    
    $this->renderSimple();
    
  }




  
}


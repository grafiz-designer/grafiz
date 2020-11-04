<?php
namespace Controllers;
use App\Form;


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
  }
  
  public function send(){
    // apres avoir sécurisé le form, j'extrais les valeurs en variables
    extract(Form::secureForm($_POST));

    if(strlen($nom) <= 25 && preg_match("#^([a-zA-Z0-9'ïàâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $nom)){
      self::$msg = 'longueur bonne';
     
      // je rajoute un regex pr améliorer la validation d'email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
  
        self::$success = true;
        self::$msg = 'tous les champs sont correctes';
      
        $contact = new Contact($nom, $email, $sujet, $message);
        $contact->insertContact();
        $contact->sendEmail();
  
        self::$msg = 'message envoyé';
        
      }else{
        self::$msg = 'Adresse email incorrect';
      }
    }else{
      self::$msg = 'Votre nom est incorrect';
    }
    // header('Location: /grafiz-site/contact');
    // exit;
  }
  
}

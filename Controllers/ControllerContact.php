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
  }
  






  public function send(){
    // apres avoir sécurisé le form, j'extrais les valeurs en variables
    $reponse = Form::isValid($_POST);
    if($reponse['success']){
      $contactManager = new ContactManager();
      $contactManager->insertContact($reponse['post']);
      $contactManager->sendEmail($reponse['post']);
      header('Location: /grafiz-site/contact');
      
      



    }else{
      debug($reponse['msg']);
    }

    // if(strlen($nom) <= 25 && preg_match("#^([a-zA-Z0-9'ïàâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $nom)){
    //   $this->$msg = 'longueur bonne';
      
    //   // je rajoute un regex pr améliorer la validation d'email
    //   if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
  
    //     $this->$success = true;
    //     $this->$msg = 'tous les champs sont correctes';
      
    //     $this->_contactManager = new ContactManager();
    //     $contact->insertContact();
    //     $contact->sendEmail();
  
    //     $this->$msg = 'message envoyé';
        
    //   }else{
    //     $this->$msg = 'Adresse email incorrect';
    //   }
    // }else{
    //   $this->$msg = 'Votre nom est incorrect';
    // }
    // header('Location: /grafiz-site/contact');
    // exit;
  }
  
}

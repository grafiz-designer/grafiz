<?php
namespace App;
use Controllers\ControllerAccueil;
// use Controllers\ControllerWorks;



class Router
{
  private $ctrl;
  private $view;
  
  
  public function start(){
    

    try{
      //on crée une variable $url
      $params = [];
 

      //on va determiner le controleur en
      //fonction de la valeur de cette variable
      if (isset($_GET['p'])) {
        //on décompose l'url et on lui applique un filtre
        $params = explode('/', filter_var($_GET['p'], FILTER_SANITIZE_URL));

        $controller = ucfirst(strtolower(array_shift($params)));

        //on recupere le premier parametre de url
        //on le met tout en miniscule
        //on met sa premiere lettre en majuscule
        $controllerClass = "Controller".$controller;
        $controllerNamespace = "Controllers\\". $controllerClass;
        //on retrouve le chemin du controleur voulu
        $controllerFile = "Controllers/".$controllerClass.".php";

        //on check si le fichier du controleur existe
        if (file_exists($controllerFile)) {
          //on lance la classe en question
          //avec tous les parametres url
          //pour respecter l'encapsulation
          // require_once($controllerFile);
          $this->ctrl = new $controllerNamespace($params);
        }
        else {
          $this->ctrl = new ControllerAccueil($params);
          throw new \Exception("Page introuvable", 1);

        }
      }

      else {
        // require_once('controllers/ControllerAccueil.php');
        $this->ctrl = new ControllerAccueil($params);
      }

    } catch (\Exception $e) {
      $errorMsg = $e->getMessage();
      
    }










    // try {    
    //   session_start();
    //   if (isset($_GET['p'])) {
    //     //on décompose l'url et on lui applique un filtre
    //     $params = explode('/', filter_var($_GET['p'], FILTER_SANITIZE_URL));
    //     if($params[0] != ''){
    //       // array_shift enlève définitevement la 1ère valeur du tableau 
    //       $controllerClass = "Controller". ucfirst(strtolower(array_shift($params)));
    //       $controllerFile = 'Controllers/'. $controllerClass. ".php";
    //       $controllerNamespace = "Controllers\\". $controllerClass;
 
    //       if(file_exists($controllerFile)){
      
    //         $this->ctrl = new $controllerNamespace();
            
    //         // On récupère le 2ème paramètre d'URL
    //         // $params[0] ne correspond plus au controller plus haut car array_shift() la retiré il correspond obligatoirement au paramètre second ou soit il n'a pas été définit et ds ce cas je lui donne la méthode index() par défaut
    //         $action = (isset($params[0])) ? array_shift($params) : 'index';

    //         // vérifie si la méthode se trouve dans le controleur instancié.
    //         // get_class_methods() me permet de retourner seulement les méthodes qui sont public, je veux afficher une page 404 dans le cas ou on apelle une méthode private dans l'URL
    //         if(in_array($action, get_class_methods($this->ctrl))){
    //           // if(method_exists($this->ctrl, $action)){
    //           // Si il reste des paramètres on les passe à la méthode ou sinon on apelle juste la méthode sans paramètre
    //           (isset($params[0])) ? call_user_func_array([$this->ctrl, $action], $params) : $this->ctrl->$action();

    //         }else{
    //           // ici on appelera une page 404
    //           http_response_code(404);
    //           echo "La page recherchée n'existe pas";
    //         }

    //       }else{
    //         // si le controller n'existe pas, je redirige vers la page d'accueil
    //         header('Location: /grafiz-site');
    //       }
          
    //     }else{
    //         $this->ctrl = new ControllerAccueil();

    //     }

    //   // si rien n'est rentré dans l'URL
    //   }else{
    //     $this->ctrl = new ControllerAccueil();
    //     $this->ctrl->index();
    //   }
      
    // } catch (\Exception $e) {
    //   // $errorMsg = $e->getMessage();
    //   // $this->_view = new View('Error');
    //   // $this->_view->generate(array('errorMsg' => $errorMsg));
    // }
    

    
  }
  

  
}








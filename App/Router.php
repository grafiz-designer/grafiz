<?php
namespace App;
use Controllers\ControllerAccueil;
class Router
{
  private $ctrl;
  private $view;
  public function start(){
    // On démarre la session
    session_start();
    try{
      $params = [];
      //on va determiner le controleur en fonction de la valeur de cette variable
      if (isset($_GET['p'])) {
        //on décompose l'url et on lui applique un filtre
        $params = explode('/', filter_var($_GET['p'], FILTER_SANITIZE_URL));
        $controller = ucfirst(strtolower(array_shift($params)));
        //on recupere le premier parametre de url, on le met tout en miniscule, on met sa premiere lettre en majuscule
        $controllerClass = "Controller".$controller;
        $controllerNamespace = "Controllers\\". $controllerClass;
        //on retrouve le chemin du controleur voulu
        $controllerFile = "Controllers/".$controllerClass.".php";
        //on check si le fichier du controleur existe
        if (file_exists($controllerFile)) {
          //on lance la classe en question avec tous les parametres url pour respecter l'encapsulation
          $this->ctrl = new $controllerNamespace($params);
        }
        else {
          $this->ctrl = new ControllerAccueil($params);
          throw new \Exception("Page introuvable", 1);
        }
      }
      else {
        $this->ctrl = new ControllerAccueil($params);
      }
    } catch (\Exception $e) {
      $errorMsg = $e->getMessage();
    }
  }
}








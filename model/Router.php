<?php
namespace Models;
/**
 * Class Router qui permet d'appeler le bon controller
 * @return void
 */

 class Router {

    private $_request;
    
    const ROUTES = ["home", "works", "services", "about", "tutos", "contact", "404"];

    
    public function __construct($request){
        if($request !== "accueil"){
            $this->_request = $request;
        }else{
            $this->_request = "home";
        }
    }

    public function renderController(){
        if(in_array($this->_request, self::ROUTES)){
            require CONTROLLER . "/" .  $this->_request . ".php";
        }else{
            require CONTROLLER . "/404.php";
        }
    }

 }
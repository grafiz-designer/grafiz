<?php
namespace Grafiz;
/**
 * Class Router pour trouver la bonne route selon la requete
 * @return router
 */

 class Router {

    private $_request;
    static $routes = ["home", "works", "about", "contact", "404"];

    public function __construct($request){
        $this->_request = $request;
    }

    public function getRequest(){
        return $this->_request;
    }

    public function render(){
        if(in_array($this->_request, self::$routes)){
            require CONTROLLER . "/" .  $this->_request . ".php";
        }else{
            require CONTROLLER . "/404.php";
        }
    }

 }
<?php
namespace Classes;


/**
 * Class Router qui permet d'appeler le bon controller
 * @return void
 */

 class Router
 {
    const DEFAULT_CONTROLLER = "Home";
    const DEFAULT_TASK = "index";
    const CONTROLLERS = ["home", "works", "about", "tutos", "contact"];
    
    
    /**
     * Exécute l'action nécessaire sur le controller voulu
     *
     * @return void
     */
    public function process(): void
    {
        $controllerName = self::getControllerName();
        $taskName = self::getTaskName();

        $controller = new $controllerName();
        $controller->$taskName();
   
    }

    /**
     * Retourne la task demandée dans l'url
     *
     * @return string
     */
    private static function getControllerName(): string
    {
        $controllerName = filter_input(INPUT_GET, "controller", FILTER_SANITIZE_SPECIAL_CHARS);
        if($controllerName){
            if(!in_array($controllerName, self::CONTROLLERS)){
                $controllerName = "404.php";
            }
        }else{
            $controllerName = self::DEFAULT_CONTROLLER;
        }
        return "Controllers\\" . ucfirst($controllerName);
        
    }

    /**
     * Retourne la task demandée dans l'url
     *
     * @return string
     */
    private static function getTaskName(): string
    {
        $taskName = filter_input(INPUT_GET, "task", FILTER_SANITIZE_SPECIAL_CHARS);
        if (!$taskName) {
            $taskName = self::DEFAULT_TASK;
        }
        return $taskName;
    }

    

 }
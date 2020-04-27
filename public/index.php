<?php
use Models\Router;

// Ce fichier c'est le 'FrontController' qui a pour but d'appeler le bon controleur.
 

 // je charge d'abord toutes mes constantes ...
require "../_config.php";

// je charge "autoload" pour charger dynamiquement la classe que l'on souhaite.
require ROOT . "/vendor/autoload.php";


//appel du routeur
if(isset($_GET['action'])){
    $router = new Router($_GET['action']);
    $router->renderController();
}else{
    $router = new Router('home');
    $router->renderController();



























































    
}








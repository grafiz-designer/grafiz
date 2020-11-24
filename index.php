<?php
use App\Router;
// Ce fichier c'est le 'FrontController' qui a pour but d'appeler le bon controleur.
 define('ROOT', $_SERVER["DOCUMENT_ROOT"] . "/grafiz" );
 define('CONTROLLER', $_SERVER["DOCUMENT_ROOT"] . "/grafiz/controllers/" );
 define('MODEL', $_SERVER["DOCUMENT_ROOT"] . "/grafiz/models" );
 define('VIEW', $_SERVER["DOCUMENT_ROOT"] . "/grafiz/Views/" );
 define('ASSETS', "http://" . $_SERVER["HTTP_HOST"] . "/grafiz/assets" );
 define('HTTP_ROOT', "http://" . $_SERVER["HTTP_HOST"] . "/grafiz" );
// je charge "autoload" pour charger dynamiquement la classe que l'on souhaite.
require ROOT . "/vendor/autoload.php";
$router = new Router();
$router->start();
?>






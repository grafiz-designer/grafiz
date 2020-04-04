<?php
/**
 * Ce fichier c'est le 'FrontController' qui a pour but d'appeler le bon controleur.
 */

// je charge d'abord toutes mes constantes ...
require "../_config.php";

// je charge "autoload" pour charger dynamiquement la classe que l'on souhaite.
require ROOT . "/vendor/autoload.php";

debug($_GET);
$request = $_GET['action'];


if(isset($request) && $request === "home"){
    require CONTROLLER . "/home.php";
}else if (isset($request) && $request === "works") {
    require VIEW . "/works.php";
}else if (isset($request) && $request === "about"){
    require VIEW . "/about.php";
}else if (isset($request) && $request === "contact"){
    require VIEW . "/contact.php";
}else{
    require VIEW . "/404.php";
}













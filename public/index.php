<?php
// je charge "autoload" pour charger dynamiquement la classe que l'on souhaite.


// On définie la racine du site dans une constante 'ROOT' ici la racine du site est dans le dossier 'public'
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

// $router = new AltoRouter();

// // map homepages
// $router->map('GET', '/', function() {
//     require(ROOT . "../views/home.php");
// });




require ROOT . "../views/inc/header.inc.php";
require ROOT . "../views/home.php";
require ROOT . "../views/inc/footer.inc.php";














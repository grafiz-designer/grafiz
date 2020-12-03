<?php
function debug($val){
  echo "<pre>";
      var_dump($val);
  echo "</pre>";
}
// ob_start("minifier"); 
// function minifier($code) { 
//     $search = array( 
          
//         // Remove whitespaces after tags 
//         '/\>[^\S ]+/s', 
          
//         // Remove whitespaces before tags 
//         '/[^\S ]+\</s', 
          
//         // Remove multiple whitespace sequences 
//         '/(\s)+/s', 
          
//         // Removes comments 
//         '/<!--(.|\s)*?-->/'
//     ); 
//     $replace = array('>', '<', '\\1'); 
//     $code = preg_replace($search, $replace, $code); 
//     return $code; 
// }
use App\Router;

// Ce fichier c'est le 'FrontController' qui a pour but d'appeler le bon controleur.
 define('ROOT', $_SERVER["DOCUMENT_ROOT"] . "/grafiz" );
 define('CONTROLLER', $_SERVER["DOCUMENT_ROOT"] . "/grafiz/controllers/" );
 define('MODEL', $_SERVER["DOCUMENT_ROOT"] . "/grafiz/models" );
 define('VIEW', $_SERVER["DOCUMENT_ROOT"] . "/grafiz/Views/" );
 define('ASSETS', "http://" . $_SERVER["HTTP_HOST"] . "/grafiz/assets" );
//  define('IMG', "http://" . $_SERVER["HTTP_HOST"] . "/grafiz/assets/img/OPTIMIZED" );
 define('HTTP_ROOT', "http://" . $_SERVER["HTTP_HOST"] . "/grafiz" );


// je charge "autoload" pour charger dynamiquement la classe que l'on souhaite.
require ROOT . "/vendor/autoload.php";
$router = new Router();
$router->start();
?>






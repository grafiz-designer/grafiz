<?php

function debug($val){
    echo "<pre>";
    var_dump($val);
    echo "</pre>";
}
// On définie la racine du site dans une constante 'ROOT' ici la racine du site est dans le dossier 'public'
// define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

// debug([$_SERVER]);

/**
 * je configure des chemins absolus au lieu de chemin relatifs, cependant il faut un chemin qui commence par "http://" car les fichiers css seront appelés de cette manière, et la superGlobale "HTTP_HOST" ou "HTTP_REFERER" sont adaptées. Et ensuite il me faut un chemin qui démarre à la racine du serveur avec la superGlobale "DOCUMENT_ROOT". */

// $_SERVER["HTTP_REFERER"]; // "http://localhost/grafiz-site/"
// $_SERVER["HTTP_HOST"]; // "localhost"
// $_SERVER["DOCUMENT_ROOT"]; // "C:/xampp/htdocs"


define('ROOT', $_SERVER["DOCUMENT_ROOT"] . "/grafiz-site" );
define('CONTROLLER', $_SERVER["DOCUMENT_ROOT"] . "/grafiz-site/controller" );
define('MODEL', $_SERVER["DOCUMENT_ROOT"] . "/grafiz-site/model" );
define('VIEW', $_SERVER["DOCUMENT_ROOT"] . "/grafiz-site/view" );
define('ASSETS', "http://" . $_SERVER["HTTP_HOST"] . "/grafiz-site/assets" );
define('HTTP_ROOT', "http://" . $_SERVER["HTTP_HOST"] . "/grafiz-site/public" );


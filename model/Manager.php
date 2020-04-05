<?php
namespace Grafiz;

/**
 * Class Manager qui retourne un objet PDO
 * @return object 
 */

 class Manager {

    private $_db;

    public function dbConnect(){
        try {
	        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        }catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        return $_db;
    }
 }


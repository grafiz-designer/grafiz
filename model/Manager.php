<?php
namespace Grafiz;

/**
 * Class Manager qui retourne un objet PDO
 * @return PDO object
 */

 class Manager {

    private $_db;
    
    const HOST = "localhost";
    const DATABASE = "'test";
    const CHARSET = "utf-8";
    const USER = "root";
    const MDP = "";

    public function dbConnect(){
        try {
            $bdd = new PDO(
                "mysql:host=" . self::HOST .
                ";dbname=" . self::DATABASE . 
                ";charset=" . self::CHARSET .
                ",root=" . self::USER .
                "," . self::MDP
            );
        }catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        return $_db;
    }
 }


<?php
namespace Grafiz;

/**
 * Class Manager qui retourne un objet PDO
 * @return PDO object
 */

 abstract class Manager {

    protected $_dbConnect;

    const HOST = "localhost";
    const DB_NAME = "grafiz";
    const USER_NAME = "root";
    const PASSWORD = "";

    /**
     * Connexion à la BDD
     * @return void
     */
    public function dbConnect(){
        
        // On supprime la connexion précédente
        $this->_dbConnect = null;
        
        try {
            $this->_dbConnect = new \PDO("mysql:host=" . self::HOST . ";dbname=" . self::DB_NAME, self::USER_NAME, self::PASSWORD);
            // avant de lire les données ds la BDD, on indique l'encodage à utiliser
            $this->_dbConnect->exec("set names utf8");
            
            // $bdd = new \PDO('mysql:host=localhost;dbname=Grafiz;charset=utf8', 'root', '');

        }catch(PDOException $exception){
            echo "Erreur de connexion : " . $exception->getMessage();
        }
        
    }
    public function getConnect(){
        return $this->_dbConnect;
    }
 }


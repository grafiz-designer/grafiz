<?php
namespace Models;
/**
 * Class PostManager pour récupérer les posts 
 * @return void 
 */
use Models\Manager;


class PostManager extends Manager {
    /**
     * l'instance est connectée à la BDD
     * @return void
     */
    public function __construct(){
        $this->dbConnect();
    }

    
    /**
     * Retourne tous les champs de la table
     * @return array 
     */
    public function getCategorie(){
        $data = $this->_dbConnect->query('SELECT categorie FROM graphisme'); 
        return $data;
    }

}

<?php
namespace Grafiz;
/**
 * Class PostManager pour récupérer les posts 
 * @return void 
 */
use Grafiz\Manager;


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

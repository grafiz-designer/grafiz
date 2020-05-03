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
        $data->fetch(\PDO::FETCH_ASSOC);
        return $data;
    }

    /**
     * Getters
     * @return array
     */
    public function getWork($id){
        $req = $this->_dbConnect->prepare('SELECT * FROM book WHERE id = ?');
        $req->execute(array($id));
        $data = $req->fetch(\PDO::FETCH_ASSOC);
        return $data;
    }

    public function getAllWorks(){
        $data = $this->_dbConnect->query('SELECT * FROM book ORDER BY DESC');
        return $data;
    }

    public function getAllWorksLimit(){
        $data = $this->_dbConnect->query('SELECT * FROM book ORDER BY DESC LIMIT 0,6');
        return $data;
    }














}

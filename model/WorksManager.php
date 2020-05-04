<?php
namespace Models;
use Models\Manager;
use Models\Work;


/**
 * Class PostManager pour récupérer les posts 
 * 
 */

class WorksManager extends Manager {

    
    public function __construct(){
        $this->dbConnect();
    }

    /**
     * indiquer en param l'id a récupérer
     * @return array
     */
    public function getWork(int $id){
        $req = $this->_dbConnect->prepare('SELECT * FROM works WHERE id = ?');
        $req->execute(array($id));
        $data = $req->fetch(\PDO::FETCH_ASSOC);
        return $data;
    }

     /**
     * récupère tous les works 
     * @return array
     */
    public function getAllWorks(){
        $req = $this->_dbConnect->query('SELECT * FROM works ORDER BY DESC');
        while($row = $req->fetch(\PDO::FETCH_ASSOC)){
            $work = new Work($row);
            $works[] = $work;
        }
        return $works;
    }


    /**
     * indiquer en param le nombre limite de works a récupérer
     * @return array
     */
    public function getAllWorksLimit(int $limit){
        $req = $this->_dbConnect->prepare('SELECT * FROM works ORDER BY DESC LIMIT = ?');
        $req->execute(array($limit));

        while($row = $req->fetch(\PDO::FETCH_ASSOC)){
            $work = new Work($row);
            // tableau ddes objets works
            $works[] = $work;
        }

        return $works;
    }














}

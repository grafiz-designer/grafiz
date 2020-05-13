<?php
namespace Models;
use Models\Manager;
use Models\Work;


/**
 * Class PostManager pour récupérer les works 
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
        $works = [];
        $req = $this->_dbConnect->query('SELECT * FROM works');
        while($row = $req->fetch(\PDO::FETCH_ASSOC)){
        
            $work = new Work($row);
            
           $works[] = $work;
        }
        $req->closeCursor();
        // un tableau d'objets
        return $works;
        
    }



    /**
     * indiquer en param le nombre limite de works a récupérer
     * @return array
     */

    public function getAllWorksLimit(){
        $req = $this->_dbConnect->query('SELECT * FROM works LIMIT 0, 8');
        
   
        while($row = $req->fetch(\PDO::FETCH_ASSOC)){
  
            $work = new Work($row);
            // tableau ddes objets works
            $works[] = $work;
        }
        $req->closeCursor();
        return $works;
    }

    
     /**
     * récupère tous les works avec les meilleurs imgs
     * @return array
     */

    public function getAllWorksOptimized(){
        $req = $this->_dbConnect->query('SELECT * FROM works');

    }














}

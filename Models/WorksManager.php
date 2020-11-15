<?php
namespace Models;
use PDO;


class WorksManager extends Model
{

  //gréer la fonction qui va recuperer
  //tous les articles dans la bdd
  public function getWorks(){
    return $this->getAll('works', ("Work"));
  }



  public function getWork($id){
    return $this->getOne('works', 'Work', $id);
  }



  public function getSpecificWorks($works, $obj){
    $this->getBdd();
    $var = [];
    $req = self::$_bdd->query("SELECT * FROM . $works WHERE id IN (37, 14, 9, 22, 27, 15)");
    $req->execute();

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
      
      $objPath = "Models\\".ucFirst($obj);
      // var contiendra les données sous forme d'objets
      $var[] = new $objPath($data);
      // debug($var);
      
    }

    $req->closeCursor();
    return $var;
  }
 











  
}


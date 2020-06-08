<?php
namespace Classes;
use Models\Work;


abstract class Model
{
  // Informations de la base de données
  private $host = "localhost";
  private $db_name = "grafiz";
  private $username = "root";
  private $password = "";
  
  // Propriété qui contiendra l'instance de la connexion
  protected $pdo;
  
  // Propriétés permettant de personnaliser les requêtes
  protected $table; 
  
  public function __construct()
  {
    $this->getPdo();

  }
  
  
  /**
  * Initialisation à la BDD
  * @return void
  */
  protected function getPdo(){ 
    // On supprime la connexion précédente
    $this->pdo = null;
    
    try {
      // "\PDO" permet de preciser qu'il sagit de la classe global PDO car la ns sommes ds le namespace "Models"
      $this->pdo = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
      // avant de lire les données ds la BDD, on indique l'encodage à utiliser
      $this->pdo->exec("set names utf8");
      
    }catch(PDOException $exception){
      echo "Erreur de connexion : " . $exception->getMessage();
    }
    
    
  }
  
  
  
  
  /**
  * récupère tous les items
  * @param integer $id
  * @return array
  */
  public function findAll(): array 
  {
    $req = $this->pdo->query("SELECT * FROM {$this->table}");
    if($this->table == "works"){
      $item = [];
      while($row = $req->fetch(\PDO::FETCH_ASSOC)){

        $array = new Work($row);
  
        $item[] = $array;
      }
      $req->closeCursor();
    }else{
      $item = $req->fetchAll();
    }
    
    return $item;
  }
  
  
  
  
  /**
  * récupère un nombre précis d'items
  * @return array
  */
  
  public function findLimit(int $nbre = 6): array 
  {
    $sql = "SELECT * FROM {$this->table}";
    // si aucun nbre est indiqué alors on laisse la valeur par défaut 6
    !$nbre ?: $sql .= " LIMIT 0, $nbre";
    $req = $this->pdo->query($sql);
    
    if($this->table == "works"){
      $item = [];
      while($row = $req->fetch(\PDO::FETCH_ASSOC)){
        $array = new Work($row);
        $item[] = $array;
      }
      $req->closeCursor();
    }else{
      $item = $req->fetchAll();
    }
    
    return $item;
    

  }
  
  
  
  
  
  
  /**
  * Retourne un item dans la base de données grâce à son id
  * @return array
  */
  public function find(int $id): array
  {
    $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
    $query->execute(['id' => $id]);
    $item = $query->fetch();
    
    return $item;
  }
  
  
  
  /**
  * Supprime un item grâce à son id
  *
  * @param integer $id
  * @return void
  */
  public function delete(int $id): void
  {
    // 2. On exécute la suppression
    $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
    $query->execute(['id' => $id]);
  }
  
  
  
  
  
  /**
  * insert un item
  *
  *
  * @return void
  */
  public function insert(): void
  {
    $query = $this->pdo->prepare("INSERT INTO {$this->table}");
   
  }
  
  
  
  
  
  
  
}
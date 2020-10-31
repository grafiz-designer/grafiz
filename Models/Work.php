<?php
namespace Models;


class Work
{
    
    private $id;
    private $categorie;
    private $nom;
    private $client;
    private $description;
    private $icon_path;
    private $imgs_path;
    private $img_show = false;
    

    public function __construct(array $data){
        // hydratation
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    

    
    
    private function setId(int $id)
    {
        $this->id = $id;
    }
    
    
    
    private function setCategorie(string $categorie)
    {
        $this->categorie = $categorie;
    }
    
    
    
    private function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    
    
    
    private function setClient(string $client)
    {
        $this->client = $client;
    }
    
    
    
    private function setDescription(string $description)
    {
        $li = explode("- ", $description);
        // si la chaine commence par un premier 'tiret' alors explode va renvoyer une valeur vide comme 1ère clé du tableau, 
        // if($li[0] == null){
        //     // pour remédier à ce bug, on supprime  clé vide 
        //     array_splice($li, 0, 1);
        // }

        $this->description = $li;
    }
    
    
    
    /**
    * définie le chemin des icones logiciels
    */
    private function setIcon_path(string $icons)
    {  
        if($icons) {
            $url = ASSETS . "/img/icons/";
            // même si il n'existe pas de virgules explode permet de retourner la seule icone dans un array
            $arrayIcons = explode(', ', $icons);
            
            // si il existe plusieurs icons on rajoute une clé dans l'array 
                foreach($arrayIcons as $key => $icon){
                    $this->icon_path[] = array(
                        "name" => $icon,
                        'path' => $url. $icon. '.svg'
                    );
               
                    
                }
        }

       
    }
 
  

    
    
    /**
    * récupère la 1ère image
    */
    private function getFirst_img()
    {
        return $this->imgs_path[0];
    }
    
    
    
    /**
    * définie le chemin absolue des imgs
    */
    private function setImgs_path(string $paths)
    {
        // debug($paths);
        $url = ASSETS . "/img/";
        $virgule = strpos($paths, ',');
        if ($virgule === false){
            $arr[] = $url . $paths;
            $this->imgs_path = $arr;
            
            
            // sinon il y a plusieurs imgs   
        }else{
            $arrayImgs = (explode(', ', $paths));
            foreach($arrayImgs as $key => $values){

                $arr[] = $url . $values;
            }
            $this->imgs_path = $arr;

        }
        
    }

    private function setImg_show($path)
    {
        $url = ASSETS . "/img/";
        $this->img_show = $url . $path;
        
    }


    public function getId(){
        return $this->id;
    }
    public function getCategorie(){
        return $this->categorie;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getClient(){
        return $this->client;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getIcons(){
        return $this->icon_path;
    }

    public function getImgShow(){
        return $this->img_show;
    }

    public function getImgs(){
        return $this->imgs_path;
    }
  
    
    
    
    
    
    
    
}
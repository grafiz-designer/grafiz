<?php
namespace Models;

class Work {
    
    private $_id;
    private $_categorie;
    private $_nom;
    private $_client;
    private $_description;
    private $_icon_path;
    private $_imgs_path;
    private $_img_show = false;
   
    

    public function __construct(array $data){

        $this->hydrate($data);
    }
    
    // ucfirst pr mettre la 1ere lettre en MAJ
    public function hydrate(array $data){

        foreach($data as $key => $value){

            $method = 'set' . ucfirst($key);

            if(method_exists($this, $method)){
                // trim() permet de suppr les espaces inutiles que j'ai pu laisser en BDD
                $this->$method(trim($value));
            }
            
        }
        
    }

    /**
     * id
     */
    public function getId(){

        return $this->_id;
    }

    public function setId(int $id){

        $this->_id = $id;
    }

    /**
     * categorie
     */
    public function getCategorie(){

        return $this->_categorie;
    }

    public function setCategorie(string $categorie){

        $this->_categorie = $categorie;
    }

    /**
     * nom
     */
    public function getNom(){

        return $this->_nom;
    }

    public function setNom(string $nom){

        $this->_nom = $nom;
    }

    /**
     * client
     */
    public function getClient(){

        return $this->_client;
    }

    public function setClient(string $client){

        $this->_client = $client;
    }

    /**
     * description
     */
    public function getDescription(){

        return $this->_description;
    }

    public function setDescription(string $description){

        $this->_description = $description;
    }

    /**
     * récupère le chemin des icones logiciels
     */
    public function getIcon_path(){

        return $this->_icon_path;
    }

    /**
     * définie le chemin des icones logiciels
     */

    public function setIcon_path(string $path){

        $this->_icon_path = $path;
    }


     /**
     * récupère la 1ère image
     */
    public function getFirst_img(){

        return $this->_imgs_path[0];
       
    }


    /**
     * récupère le chemin des imgs
     */
    public function getImgs_path(){

        return $this->_imgs_path;
        
    }

    /**
     * définie le chemin absolue des imgs
     */
    public function setImgs_path(string $paths){

        $url = ASSETS . "/img/";

        $virgule = strpos($paths, ',');

        if ($virgule === false){

            $arr[] = $url . $paths;
            $this->_imgs_path = $arr;

        // sinon il y a plusieurs imgs   
        }else{

            $arrayImgs = (explode(', ', $paths));

            foreach($arrayImgs as $key => $values){
                
                // on recherche le mot 'show' pr déterminer si il existe une image de présentation
                if(strpos($values, 'show')){

                    $this->_img_show = $url . $values;
                    
                }
                $arr[] = $url . $values;
            }

            $this->_imgs_path = $arr;
        }
      
    }


    /**
     * récupère l'image à afficher pr chaque projet
     */
    public function getImg_show(){

        return $this->_img_show;
    }
        





}
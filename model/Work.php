<?php

class Work {
    
    private $_id;
    private $_categorie;
    private $_nom;
    private $_client;
    private $_description;
    private $_img_logiciel;
    private $_img_work;

    public function __construct(array $data){
        $this->hydrate($data);
    }
    
    // ucfirst pr mettre la 1ere lettre en MAJ
    public function hydrate(array $data){
        foreach($data as $key => $value){
            $mehod = 'set' . ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
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
     * img_logiciel
     */
    public function getImg_logiciel(){
        return $this->_img_logiciel;
    }

    public function setImg_logiciel(string $img_logiciel){
        $this->_img_logiciel = $img_logiciel;
    }

     /**
     * img_work
     */
    public function getImg_work(){
        return $this->_img_work;
    }

    public function setImg_work(string $img_work){
        $this->_img_work = $img_work;
    }
    
















}
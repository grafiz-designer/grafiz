<?php
namespace Models;
use Classes\Entity;

class Work extends Entity{
    
    protected $id;
    protected $categorie;
    protected $nom;
    protected $client;
    protected $description;
    protected $icon_path;
    protected $imgs_path;
    protected $img_show = false;
   



    public function setId(int $id)
    {
        $this->id = $id;
    }



    public function setCategorie(string $categorie)
    {
        $this->categorie = $categorie;
    }



    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }



    public function setClient(string $client)
    {
        $this->client = $client;
    }



    public function setDescription(string $description)
    {
        $this->description = $description;
    }



    /**
     * définie le chemin des icones logiciels
     */
    public function setIcon_path(string $path)
    {
        $this->icon_path = $path;
    }


     /**
     * récupère la 1ère image
     */
    public function getFirst_img()
    {
        return $this->imgs_path[0];
    }



    /**
     * définie le chemin absolue des imgs
     */
    public function setImgs_path(string $paths)
    {
        $url = ASSETS . "/img/";
        $virgule = strpos($paths, ',');
        if ($virgule === false){
            $arr[] = $url . $paths;
            $this->imgs_path = $arr;

        // sinon il y a plusieurs imgs   
        }else{
            $arrayImgs = (explode(', ', $paths));
            foreach($arrayImgs as $key => $values){
                // on recherche le mot 'show' pr déterminer si il existe une image de présentation
                if(strpos($values, 'show')){
                    $this->img_show = $url . $values;
                }
                $arr[] = $url . $values;
            }
            $this->imgs_path = $arr;
        }
      
    }


        





}
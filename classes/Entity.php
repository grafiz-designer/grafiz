<?php
namespace Classes;



abstract class Entity
{

  public function __construct(array $data)
    {
        $this->hydrate($data);
    }
        

    private function hydrate(array $data) : void
    {
        foreach($data as $key => $value){
            // ucfirst pr mettre la 1ere lettre en MAJ
            $method = 'set' . ucfirst($key);
            if(method_exists($this, $method)){
                // trim() permet de suppr les espaces inutiles que j'ai pu laisser en BDD
                $this->$method(trim($value));
            }     
        }
    }

    // getter générique
    public function get($prop)
    {   
        return $this->$prop;
    }
    



}

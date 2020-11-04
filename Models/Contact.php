<?php
namespace Models;


class Contact
{
  private $id;
  private $nom;
  private $email;
  private $sujet;
  private $message;


  public function __construct(array $data){
    // hydratation
    foreach ($data as $key => $value) {
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }
}


public function setId(int $id)
{
    $this->id = $id;
}

public function setNom(int $nom)
{
    $this->nom = $nom;
}

public function setEmail(int $email)
{
    $this->email = $email;
}

public function setSujet(int $sujet)
{
    $this->sujet = $sujet;
}

public function setMessage(int $message)
{
    $this->message = $message;
}
}
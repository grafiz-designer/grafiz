<?php
namespace Models;


class Contact
{
  private $id;
  private $nom;
  private $email;
  private $sujet;
  private $message;
  private $date_creation;


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

public function setNom(string $nom)
{
    $this->nom = $nom;
}

public function setEmail(string $email)
{
    $this->email = $email;
}

public function setSujet(string $sujet)
{
    $this->sujet = $sujet;
}

public function setMessage(string $message)
{
    $this->message = $message;
}

public function setDate_creation($date)
{
    $this->date_creation = $date;
}




/**
 * GETTERS
 */

public function getId(int $id)
{
    return $this->id;
}

public function getNom(string $nom)
{
    return $this->nom;
}

public function getEmail(string $email)
{
    return $this->email;
}

public function getSujet(string $sujet)
{
    return $this->sujet;
}

public function getMessage(string $message)
{
    return $this->message;
}

public function getDateCreation(string $date)
{
    return $this->date_creation;
}





}
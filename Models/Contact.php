<?php
namespace Models;
use App\Hydrate;

class Contact extends Hydrate
{
  private $id;
  private $nom;
  private $email;
  private $sujet;
  private $message;


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
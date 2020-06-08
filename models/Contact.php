<?php
namespace models;
use Classes\Entity;

class Contact extends Entity
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





}
<?php

class Contact
{
  private $nom;
  private $email;
  private $sujet;
  private $message;
  private $to;
  private $headers;
  
  public function __construct($nom, $email, $sujet, $message)
  {
    $this->nom = $nom;
    $this->email = $email;
    $this->sujet = $sujet;
    $this->message = $message;
  }
  
  
  
  public function insertContact()
  {
    $bdd = new \PDO('mysql:host=localhost;dbname=grafiz;charset=utf8', 'root', '', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('INSERT INTO contact(nom, email, sujet, message) VALUES(:nom, :email, :sujet, :message)');
    $req->execute(array(
      'nom' => $this->nom,
      'email' => $this->email,
      'sujet' => $this->sujet,
      'message' => $this->message
    ));
  }

  public function sendEmail()
  {
    $this->to = 'trafixel.creation@gmail.com';
    $this->email = strip_tags($email);
    $this->sujet = strip_tags($sujet);
    $this->message = strip_tags($message);

    $this->headers = 'From:'.$this->email."\r\n";
    $this->headers = 'MIME-version: 1.0'."\r\n";
    $this->headers = 'Content-type: text/html; charset=utf-8'."\r\n";

    mail($this->to,$this->sujet,$this->message,$this->headers);
  }
  

}
<?php
namespace Models;



class ContactManager extends Model
{


    public function getContact(){
      return $this->getAll('contact', "Contact");
    }



    
    public function insertContact(){

      $req = $bdd->prepare('INSERT INTO contact(nom, email, sujet, message) VALUES(:nom, :email, :sujet, :message)');
      $req->execute(array(
        'nom' => $this->nom,
        'email' => $this->email,
        'sujet' => $this->sujet,
        'message' => $this->message
      ));
    }
  



    public function sendEmail(){

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


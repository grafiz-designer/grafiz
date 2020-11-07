<?php
namespace Models;



class ContactManager extends Model
{


    public function getContacts(){
      return $this->getAll('contact', "Contact");
    }
    public function getContactsByEmail(){
      return $this->getAllGroupBy('contact', 'Contact');
    }
 
    
    public function insertContact($post){
      
      $this->getBdd();
      $req = self::$_bdd->prepare('INSERT INTO contact(nom, email, sujet, message, date_creation) VALUES(:nom, :email, :sujet, :message, :date_creation)');
      $req->execute(array(
        'nom' => $post['nom'],
        'email' => $post['email'],
        'sujet' => $post['sujet'],
        'message' => $post['message'],
        'date_creation' => date('d/m/Y, H:i:s')
      ));
    }
  

    public function sendEmail($post){

      $to = 'trafixel.creation@gmail.com';
      $email = strip_tags($post['email']);
      $sujet = strip_tags($post['sujet']);
      $message = strip_tags($post['message']);
  
      $headers[] = 'From:'.$post['email'];
      $headers[] = 'MIME-version: 1.0';
      $headers[] = 'Content-type: text/html; charset=utf-8';
      mail($to,$sujet,$message,implode("\r\n", $headers));
    }



 

}


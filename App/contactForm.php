<?php
require "classes/Contact.php";


$success = false;
$msg = false;


// function pr échapper les caractères dangereux
function validField($field){
  $field = stripslashes($field);
  $field = strip_tags($field);
  $field = htmlspecialchars($field);
  return $field;
}

extract($_POST);

if((!empty($nom)) AND (!empty($email)) AND (!empty($sujet)) AND (!empty($message))){

  $nom = validField($nom);
  $email = validField($email);
  $sujet = validField($sujet);
  $message = validField($message);

  if(strlen($nom) <= 25 && preg_match("#^([a-zA-Z0-9'ïàâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $nom)){
    $msg = 'longueur bonne';
   
    // je rajoute un regex pr améliorer la validation d'email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){

      $success = true;
      $msg = 'tous les champs sont correctes';
    

      $contact = new Contact($nom, $email, $sujet, $message);
      $contact->insertContact();
      $contact->sendEmail();
      
      // unset($nom);
      // unset($sujet);
      // unset($message);
      // unset($contact);

      $msg = 'message envoyé';
      


    }else{
      $msg = 'Adresse email incorrect';
    }
  }else{
    $msg = 'Votre nom est incorrect';
  }
}else{
  $msg = 'Veuillez renseigner tous les champs';
}



echo json_encode($msg);
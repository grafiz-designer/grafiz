<?php
namespace App;


class Form
{



  public static function isValid(array $post)
  {
    // nettoie chaque champs du POST
  
    // debug($secureForm);
    if(strlen($post['nom']) <= 25 && preg_match("#^([a-zA-Z0-9'ïàâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $post['nom'])){
   
      
      // je rajoute un regex pr améliorer la validation d'email
      if(filter_var($post['email'], FILTER_VALIDATE_EMAIL) && preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $post['email'])){
  
        $msg = 'Votre message a été envoyé, vous recevrez une réponse dans les 24H';
        $success = true;

        $post = array_map('self::secureForm', $post);

        
      }else{
        $msg = 'Adresse email incorrect';
        $success = false;
      }
    }else{
      $msg = 'Votre nom est incorrect';
      $success = false;
    }


    
    return array(
      'msg' => $msg, 
      'success' => $success,
      'post' => $post
    );
    
  }




private static function secureForm($field){
    
    $field = stripslashes($field);
    $field = strip_tags($field);
    $field = htmlspecialchars($field);
    return $field;

}



}
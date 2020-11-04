<?php
namespace App;


class Form
{

  static $secure = [];

  public static function secureForm(array $form)
  {
    // nettoie chaque champs du POST
    return $secure = array_map('static::validField', $form);
    
    
  }



  // function pr échapper les caractères dangereux
  private static function validField($field)
  {
    $field = stripslashes($field);
    $field = strip_tags($field);
    $field = htmlspecialchars($field);
    return $field;
  }




}
<?php
namespace Controllers;
use Classes\Controller;


class Contact extends Controller
{
  protected $modelName = "ContactManager";
  protected $view = "contact";

  public function index()
  {
    if(!isset($_POST) && !empty($_POST)){
      debug($_POST);
      extract($_POST);
     
    }
    $contact = $this->model->findAll();

    $this->render();  
  }
  
}

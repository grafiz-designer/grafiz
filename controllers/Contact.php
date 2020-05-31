<?php
namespace Controllers;
use Classes\Controller;


class Contact extends Controller
{

  protected $view = "contact";

  public function index()
  {
    $this->render();  
  }
  
}

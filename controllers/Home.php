<?php
namespace Controllers;
use Classes\Controller;


class Home extends Controller
{
  
  protected $view = "home";

  public function index()
  {
    $this->render();  
  }
  
}






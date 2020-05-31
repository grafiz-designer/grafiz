<?php
namespace Controllers;
use Classes\Controller;


class About extends Controller
{

  protected $view = "about";

  public function index()
  {
    $this->render();  
  }
  
}

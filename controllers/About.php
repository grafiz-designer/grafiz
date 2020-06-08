<?php
namespace Controllers;
use Classes\Controller;


class About extends Controller
{
  protected $modelName = null;
  protected $view = "about";

  public function index()
  {
    $this->render();  
  }
  
}

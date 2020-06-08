<?php
namespace Controllers;
use Classes\Controller;


class Tutos extends Controller
{
  protected $modelName = null;
  protected $view = "tutos";

  public function index()
  {
    $this->render();  
  }
  
}

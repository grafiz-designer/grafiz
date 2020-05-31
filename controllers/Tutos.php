<?php
namespace Controllers;
use Classes\Controller;


class Tutos extends Controller
{

  protected $view = "tutos";

  public function index()
  {
    $this->render();  
  }
  
}

<?php
namespace Controllers;
use Classes\Controller;


class Home extends Controller
{
  protected $modelName = "WorksManager";
  protected $view = "home";

  public function index()
  {
    $works = $this->model->findLimit();
    $this->render($works);
  }
  
}






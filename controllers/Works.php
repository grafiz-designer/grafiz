<?php
namespace Controllers;
use Classes\Controller;


class Works extends Controller
{
  protected $modelName = "WorksManager";
  protected $view = 'works';



  public function index()
  {
    
    $works = $this->model->findAll();
    // debug($works);
    $this->render($works);
  }
  
}

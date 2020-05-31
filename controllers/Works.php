<?php
namespace Controllers;
use Classes\Controller;


class Works extends Controller
{
  protected $modelName = "WorksManager";
  protected $view = 'works';

  public function index()
  {
    $works = $this->model->getAllWorks();
    $this->render($works);
  }
  
}















// use Models\WorksManager;
// use Classes\View;


// $bdd = new WorksManager();
// $works = $bdd->getAllWorks();


// // on apelle la vue
// $worksView = new View('works');
// // j'envoie les données récupérées "$post" dans la vue
// $worksView->render($works);

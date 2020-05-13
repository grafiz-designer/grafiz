<?php
use Models\WorksManager;
use Classes\View;


$bdd = new WorksManager();
$works = $bdd->getAllWorks();


// on apelle la vue
$worksView = new View('works');
// j'envoie les données récupérées "$post" dans la vue
$worksView->render($works);

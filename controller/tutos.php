<?php
use Models\WorksManager;
use Classes\View;


$bdd = new WorksManager();
$works = $bdd->getAllWorksLimit();



// on apelle la vue
$home = new View('tutos');
// j'envoie les données récupérées "$post" dans la vue
$home->render($works);



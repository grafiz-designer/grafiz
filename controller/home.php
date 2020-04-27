<?php
use Models\PostManager;
use Classes\View;


$bdd = new PostManager;
$post = $bdd->getCategorie();


// on apelle la vue
$home = new View('home');
$home->render($post);






<?php
use Classes\View;


// on apelle la vue
$contact = new View('contact');
// j'envoie les données récupérées "$post" dans la vue
$contact->render();

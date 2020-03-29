<?php 
$title = "Accueil";
ob_start(); 
?>

<h1 class="title is-primary">Hello les gens</h1>

<?php
// on met tout le code mémoriser dans une var
$content = ob_get_clean(); 
require (ROOT . "../views/template.php");
?>











<?php
use Grafiz\PostManager;


$bdd = new PostManager;
$bdd->dbConnect();
$post = $bdd->getCategorie();

require "../view/home.php";
<?php
use Grafiz\postManager;

$bdd = new postManager;
$bdd->dbConnect();
$post = $bdd->getCategorie();

require "../view/home.php";
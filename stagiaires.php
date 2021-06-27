<?php
require_once "bll/GestionStagiaire.php";
require_once "entities/Stagiaire.php";

$gestion = new GestionStagiaire();

print($gestion->getAllStagiaires());
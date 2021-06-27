<?php
require_once "bll/GestionPersonnel.php";
require_once "entities/Personnel.php";

$gestion = new GestionPersonnel();

if(isset($_GET["id"])){
        $id = (int)$_GET["id"];
        print($gestion->getPersonnelInfo($id));
    die();
}
print($gestion->getAllPersonnel());
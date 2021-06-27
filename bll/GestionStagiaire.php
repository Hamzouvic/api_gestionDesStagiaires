<?php
require_once $_SERVER["DOCUMENT_ROOT"]."\api\dal\StagiaireDAL.php";

class GestionStagiaire
{
    private StagiaireDAl $stagiaireDAL;

    public function __construct()
    {
        $this->stagiaireDAL = new StagiaireDAL();
    }

    public function getAllStagiaires()
    {
        $personnelArray = $this->stagiaireDAL->getAllStagiaires();
        return json_encode($personnelArray);
    }
}
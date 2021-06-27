<?php
require_once $_SERVER["DOCUMENT_ROOT"]."\api\dal\PersonnelDAL.php";
require_once $_SERVER["DOCUMENT_ROOT"]."\api\dal\FormationDAL.php";
require_once $_SERVER["DOCUMENT_ROOT"]."\api\dal\DomainDAL.php";

class GestionPersonnel
{
    private PersonnelDAL $personnelDAL;
    private FormationDAL $formationDAL;
    public function __construct()
    {
        $this->personnelDAL = new PersonnelDAL();
        $this->formationDAL = new FormationDAL();
    }


    /**
     * @return Personnel
     */
    public function getPersonnelInfo(int $id)
    {
        $personnelArray = $this->personnelDAL->getPersonnelByID($id);
        $formations = $this->formationDAL->getAllFormations($id);
        $domainDAL = new DomainDAL();
        foreach ($formations as &$formation){
            $domains = $domainDAL->getDomainByFormation($formation["id"]);
            $formation["domains"] = $domains;
        }
        $personnelArray["formations"] = $formations;
        return json_encode($personnelArray);
    }
    public function getAllPersonnel()
    {
        $personnelArray = $this->personnelDAL->getAllPersonnels();
        return json_encode($personnelArray);
    }
}
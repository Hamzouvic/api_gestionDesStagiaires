<?php

require_once "DBConnection.php";

class FormationDAL
{
    private $connection = null;
    private static $TABLE_NAME = "formation";
    public function __construct()
    {
        $dbconnection = new DBConnection();
        $this->connection = $dbconnection->getConnection();
    }

    public function getAllFormations($id)
    {
        $query = "select * from " . FormationDAL::$TABLE_NAME." where id_personnel = :id";
        $result = $this->connection->prepare($query);
        $result->bindParam(":id",$id);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function deleteFormation(int $id)
    {
        $query = "delete from " . TABLE_NAME . " where id = :id";
        $stmn = $this->connection->prepare($query);
        $stmn->bindParam(":id", $id);
        $result = $stmn->execute();
        return $result;
    }

    public function addFormation(Formation $formation)
    {
        $query = "insert into " . TABLE_NAME . "(designation_formation,description,id_personnel) values(:designation,:description,:idPersonnel)";
        $stmn = $this->connection->prepare($query);
        $designation = $formation->getDesignation();
        $description = $formation->getDescription();
        $idPersonnel = $formation->getIdPersonnel();
        $stmn->bindParam(":designation", $designation);
        $stmn->bindParam(":description", $description);
        $stmn->bindParam(":idPersonnel", $idPersonnel);
        $result = $stmn->execute();
        return $result;
    }

    public function updateFormation(Formation $formation)
    {
        $query = "update " . TABLE_NAME . " set designation_formation = :designation,description= :description" . " where id = :id";
        $stmn = $this->connection->prepare($query);
        $designation = $formation->getDesignation();
        $id = $formation->getId();
        $description = $formation->getDescription();
        $stmn->bindParam(":designation", $designation);
        $stmn->bindParam(":description", $description);
        $stmn->bindParam(":id", $id);
        $result = $stmn->execute();
        return $result;
    }

}
<?php

require_once "DBConnection.php";
define("TABLE_NAME", "Stagiaire");

class StagiaireDAL
{
    private $connection = null;

    public function __construct()
    {
        $dbconnection = new DBConnection();
        $this->connection = $dbconnection->getConnection();
    }

    public function getAllStagiaires()
    {
        $query = "select * from " . TABLE_NAME;
        $result = $this->connection->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getStagiaireByID(int $id)
    {
        $query = "select * from " . TABLE_NAME . " where id = :id";
        $stmn = $this->connection->prepare($query);
        $stmn->bindParam(":id", $id);
        $stmn->execute();
        $result = $stmn->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteStagiaire(int $id)
    {
        $query = "delete from " . TABLE_NAME . " where id = :id";
        $stmn = $this->connection->prepare($query);
        $stmn->bindParam(":id", $id);
        $result = $stmn->execute();
        return $result;
    }

    public function addStagiaire(Stagiaire $stagiaire)
    {
        $query = "insert into " . TABLE_NAME . "(nom,niveau) values(:nom,:niveau)";
        $stmn = $this->connection->prepare($query);
        $nom = $stagiaire->getNom();
        $niveau = $stagiaire->getNiveauEducation();
        $stmn->bindParam(":nom", $nom);
        $stmn->bindParam(":niveau", $niveau);
        $result = $stmn->execute();
        return $result;
    }

    public function updateStagiaire(Stagiaire $stagiaire)
    {
        $query = "update " . TABLE_NAME . " set nom = :nom,niveau= :niveau" . " where id = :id";
        $stmn = $this->connection->prepare($query);
        $nom = $stagiaire->getNom();
        $id = $stagiaire->getMatricule();
        $niveau = $stagiaire->getNiveauEducation();
        $stmn->bindParam(":nom", $nom);
        $stmn->bindParam(":id", $id);
        $result = $stmn->execute();
        return $result;
    }
}

<?php
require_once "DBConnection.php";
define("TABLE_NAME","personnel");

class PersonnelDAL
{
    private $connection = null;
    public function __construct()
    {
        $dbconnection = new DBConnection();
        $this->connection = $dbconnection->getConnection();
    }

    public function getAllPersonnels(){
        $query = "select * from ".TABLE_NAME;
        $result = $this->connection->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPersonnelByID(int $id){
        $query = "select * from ".TABLE_NAME." where id = :id";
        $stmn = $this->connection->prepare($query);
        $stmn->bindParam(":id",$id);
        $stmn->execute();
        $result = $stmn->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deletePersonnel(int $id){
        $query = "delete from ".TABLE_NAME." where id = :id";
        $stmn = $this->connection->prepare($query);
        $stmn->bindParam(":id",$id);
        $result = $stmn->execute();
        return $result;
    }

    public function addPersonnel(Personnel $personnel){
        $query = "insert into ".TABLE_NAME."(nom) values(:nom)";
        $stmn = $this->connection->prepare($query);
        $nom = $personnel->getNom();
        $stmn->bindParam(":nom",$nom);
        $result =$stmn->execute();
        return $result;
    }

    public function updatePersonnel(Personnel $personnel){
        $query = "update ".TABLE_NAME." set nom = :nom"." where id = :id";
        $stmn = $this->connection->prepare($query);
        $nom = $personnel->getNom();
        $id = $personnel->getMatricule();
        $stmn->bindParam(":nom",$nom);
        $stmn->bindParam(":id",$id);
        $result =$stmn->execute();
        return $result;
    }
}
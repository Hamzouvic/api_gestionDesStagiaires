<?php

require_once "DBConnection.php";

class DomainDAL
{
    private $connection = null;
    private static $TABLE_NAME = "domain";
    public function __construct()
    {
        $dbconnection = new DBConnection();
        $this->connection = $dbconnection->getConnection();
    }

    public function getAllDomains()
    {
        $query = "select * from " . DomainDAL::$TABLE_NAME;
        $result = $this->connection->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDomainByFormation($idFormation){
        $query = "select domain.designation_domain from domain_formation inner join domain where id_formation = id";
        $result = $this->connection->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteDomain(int $id)
    {
        $query = "delete from " . DomainDAL::$TABLE_NAME . " where id = :id";
        $stmn = $this->connection->prepare($query);
        $stmn->bindParam(":id", $id);
        $result = $stmn->execute();
        return $result;
    }

    public function addDomain(Domain $domain)
    {
        $query = "insert into " . DomainDAL::$TABLE_NAME . "(designation_domain,description,id_personnel) values(:designation,:description,:idPersonnel)";
        $stmn = $this->connection->prepare($query);
        $designation = $domain->getDesignation();
        $description = $domain->getDescription();
        $stmn->bindParam(":designation", $designation);
        $stmn->bindParam(":description", $description);
        $result = $stmn->execute();
        return $result;
    }

    public function updateDomain(Domain $domain)
    {
        $query = "update " . DomainDAL::$TABLE_NAME . " set designation_domain = :designation,description= :description" . " where id = :id";
        $stmn = $this->connection->prepare($query);
        $id = $domain->getId();
        $designation = $domain->getDesignation();
        $description = $domain->getDescription();
        $stmn->bindParam(":designation", $designation);
        $stmn->bindParam(":description", $description);
        $stmn->bindParam(":id", $id);
        $result = $stmn->execute();
        return $result;
    }


}
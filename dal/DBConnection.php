<?php

define("USERNAME","root");
define("PASSWORD","");
define("HOST","localhost");
define("DBNAME","gestion_stagiares");
class DBConnection
{
    private $connection = null;
    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PASSWORD);
        }catch (PDOException $ex){
            echo "connection failed".$ex->getMessage();
            die();
        }
    }

    public function getConnection(){
        return $this->connection;
    }
}
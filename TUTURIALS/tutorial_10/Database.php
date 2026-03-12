<?php
class Database 
{
    //1
    private $host = "localhost";
    private $dbname = "blogdb";
    private $username = "root";
    private $password = "";
    public $conn;
    //2
    public function getConnection() 
    {
        //3
        $this->conn = null;
        try 
        {
            //4
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->username,$this->password);
            //5
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        //6
        catch (PDOException $e) 
        {
            echo "Erreur de connexion : " . $e->getMessage();
        }
        return $this->conn;
    }
}

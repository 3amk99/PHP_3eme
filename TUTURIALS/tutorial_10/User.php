<?php
class User 
{
    private $conn;
    private $table = "users";

    public $id;
    public $nom;
    public $email;

    public function __construct($db) 
    {
        $this->conn = $db;
    }

    public function create() 
    {
        //5
        $sql = "INSERT INTO {$this->table} (nom, email) VALUES (:nom, :email)";
        //5_a
        $stmt = $this->conn->prepare($sql);
        //5_b
        return $stmt->execute(['nom' => $this->nom, 'email' => $this->email]);
    }


    public function read() 
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($sql);
        //6
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //7
    public function update() 
    {
        $sql = "UPDATE {$this->table} SET nom=:nom, email=:email WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['nom' => $this->nom, 'email' => $this->email, 'id' => $this->id]);
    }

    //8 
    public function delete() 
    {
        $sql = "DELETE FROM {$this->table} WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $this->id]);
    }
}

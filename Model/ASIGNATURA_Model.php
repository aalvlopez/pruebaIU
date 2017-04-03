<?php

class ASIGNATURA_Model
{
    private $db;

    public function __construct()
    {
        $this->db = PDOConnection::getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM asignatura";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
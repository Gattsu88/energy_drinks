<?php

namespace Classes;
use Pdo;

class Db
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new Pdo("mysql:host=localhost;dbname=energy_drinks", "root", "223121");
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }

    public function getDb()
    {
        return $this->db;
    }
}

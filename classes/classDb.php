<?php
require 'config.php';

class Db
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    protected $dbh;
    protected $error;

    public function __construct()
    {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $options = [PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        try {
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$options);
        } catch(PDOException $e) {
            $this->error = $e->getMessage();
        }
    }
}

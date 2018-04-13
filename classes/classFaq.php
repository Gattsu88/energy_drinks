<?php
require 'classDb.php';

class Faq extends Db
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getFaq() {
        $sql = "select * from faq";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    
    public function displayFaq()
    {
        foreach($this->getFaq() as $row) {
            echo '<h3>'.$row->question.'</h3>';
            echo '<p>'.$row->answer.'</p>';
        }
    }
}

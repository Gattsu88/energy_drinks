<?php
require 'classDb.php';

class Brands extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getBrands() {
        $sql = "select * from brands";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function displayBrands()
    {
        foreach($this->getBrands() as $row) {
            echo '<h3>'.$row->name.'</h3><br>';
            echo '<h4>Description</h4><div class="row"><div class="col-md-8"><p>'.$row->description.'</p><br>';
            echo '<h4>Highlights</h4><p>'.nl2br($row->highlights).'</p><br>';
            echo '<h4>About Company</h4><p>'.$row->company.'</p></div><br>';
            echo "<div class='col-md-3 col-md-offset-1'><img src=$row->image alt='Brand image' class='img-brand img-circle'></div></div><hr>";
        }
    }
}

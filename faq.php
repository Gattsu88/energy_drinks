<?php
    $title = 'FAQ';
    include 'html/header.php';
    include 'html/nav.php';
    $dbh = require 'bootstrap.php';
?>

<div class="container mainContainer">
    <div class="row text-justify">
        <div class="col-md-7 col-md-offset-1">
            <br><h2>Frequently asked questions</h2><br>

            <?php

            $query = "SELECT * from faq";
            $perPage = 4;
            $paginate = new Pagination($dbh);
            $newquery = $paginate->paging($query, $perPage);

            foreach($paginate->getData($newquery) as $record) : ?>
                <h3><?= $record->question; ?></h3>
                <p><?= $record->answer; ?><p>
            <?php endforeach;

            $paginate->createLinks($query, $perPage);
            ?>

        </div>
        <div class="col-md-3 col-md-offset-1">

        </div>
    </div>

<?php
    include 'html/footer.php';
?>

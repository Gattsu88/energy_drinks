<?php

class Paginate
{
    private $dbh;

    function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    public function getData($query)
    {
        $stmt = $this->dbh->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            ?> <p>No results.</p> <?php
        }
    }

    public function paging($query, $perPage)
    {
        if(!isset($_GET["page"]) ? $start = 0 : $start = (($_GET["page"] - 1) * $perPage));
        $query2 = $query." limit $start, $perPage";
        return $query2;
    }

    public function createLinks($query, $perPage)
    {

        $reload = $_SERVER['PHP_SELF'];

        $stmt = $this->dbh->prepare($query);
        $stmt->execute();

        $allRecords = $stmt->rowCount();

        if($allRecords > 0)
        {
            $allPages = ceil($allRecords / $perPage);

            if(!isset($_GET["page"]) ? $currentPage = 1 : $currentPage = $_GET["page"]);

            ?> <ul class="pagination"> <?php

            if($currentPage != 1) {
                $previous = $currentPage - 1;
                ?>
                <li><a href="<?= $reload; ?>?page=1">First</a></li>
                <li><a href="<?= $reload; ?>?page=<?= $previous; ?>">Previous</a></li>
                <?php
            }

            for($i=1;$i<=$allPages;$i++) {
                if($i == $currentPage) {
                    ?>
                    <li><a href="<?= $reload; ?>?page=<?= $i; ?>" id="currentPage"><?= $i; ?></a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="<?= $reload; ?>?page=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php
                }
            }

            if($currentPage != $allPages) {
                $next = $currentPage + 1;
                ?>
                <li><a href="<?= $reload; ?>?page=<?= $next; ?>">Next</a></li>
                <li><a href="<?= $reload; ?>?page=<?= $allPages; ?>">Last</a></li>
                <?php
            }

            ?> </ul> <?php
        }
    }
}

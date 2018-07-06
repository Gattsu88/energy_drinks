<?php
    $title = 'Brands';
    include 'html/header.php';
    include 'html/nav.php';
?>

<div class="container mainContainer">
    <div class="row text-justify">
        <div class="col-md-10 col-md-offset-1">
            <img src="images/brands/top-brands.png" alt="Top brands" class="img-brand-top">

            <?php
                $query = "SELECT * from brands";
                $perPage = 3;
                $newquery = $paginate->paging($query, $perPage);

                foreach($paginate->getData($newquery) as $record) : ?>
                    <h3><?= $record->name; ?></h3><br>
                    <h4>Description</h4><div class="row"><div class="col-md-8"><p><?= $record->description; ?></p><br>
                    <h4>Highlights</h4><p><?= nl2br($record->highlights); ?></p><br>
                    <h4>About Company</h4><p><?= $record->company; ?></p></div><br>
                    <div class="col-md-3 col-md-offset-1"><img src=<?= $record->image; ?> alt="Brand image" class="img-brand img-circle"></div></div><hr>
                <?php endforeach;

                $paginate->createLinks($query, $perPage);
            ?>

        </div>
    </div>

<?php
    include 'html/footer.php';
?>

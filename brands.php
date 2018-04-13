<?php
    $title = 'Brands';
    include 'html/header.php';
    include 'html/nav.php';
    include 'classInit.php';
?>

<div class="container mainContainer">
    <div class="row text-justify">
        <div class="col-md-10 col-md-offset-1">
            <img src="images/brands/top-brands.png" alt="Top brands" class="img-brand-top">

<?php
    $brands = new Brands();
    $brands->displayBrands();
?>
        </div>
    </div>

<?php
    include 'html/footer.php';
?>

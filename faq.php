<?php
    $title = 'FAQ';
    include 'html/header.php';
    include 'html/nav.php';
    include 'classInit.php';
?>

<div class="container mainContainer">
    <div class="row text-justify">
        <div class="col-md-7 col-md-offset-1">
            <br><h2>Frequently asked questions</h2><br>

<?php
    $faq = new Faq();
    $faq->displayFaq();
?>
        </div>
        <div class="col-md-3 col-md-offset-1">

        </div>
    </div>
    
<?php
    include 'html/footer.php';
?>

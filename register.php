<?php
    $title = 'Register';
    include 'html/header.php';
    include 'html/nav.php';
    include 'classInit.php';
?>

<div class="container mainContainer">
    <div class="row">
        <?php
            $user = new User();

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-register'])) {
                echo $user->register();
            }
        ?>
    </div>

<?php
    include 'html/footer.php';
?>
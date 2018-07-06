<?php
    $title = 'Register';
    include 'html/header.php';
    include 'html/nav.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-register'])) {
        $user->userRegister();
    }
?>

<div class="container mainContainer">
    <div class="row text-justify">
        <div class="col-md-7 col-md-offset-1">
            <div class="bg-danger alerts" id="errorColor">
                <p><?= $user->getErrors(); ?></p>
            </div>
            <div class="bg-success alerts" id="messageColor">
                <p><?= $user->getMessages(); ?></p>
            </div>
        </div>
    </div>
    <?php
        include 'html/footer.php';
    ?>
</div>

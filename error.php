<?php ob_start();
$pageTitle = 'COMP1006 Beer Store | Oops!';
require('header.php');
?>

<div class="jumbotron">
    <h1><i class="fa fa-exclamation-circle"></i> Something went wrong...</h1>
    <p>We're sorry about that. But don't worry, we're on it and will fix it asap.</p>
</div>

<?php
require('footer.php');
ob_flush(); ?>

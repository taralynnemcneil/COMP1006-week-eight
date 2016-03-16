<?php ob_start();
$pageTitle = 'COMP1006 Beer Store | Not Found';
require('header.php');
?>

<div class="jumbotron">
    <h1><i class="fa fa-exclamation-circle"></i> We couldn't find that page.</h1>
    <p>Please try one of the links above.</p>
</div>

<?php
require('footer.php');
ob_flush(); ?>

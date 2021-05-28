<?php ob_start(); ?>

<!--  -->
<h1>Welcome in your server  <?= $_GET['server'] ?> !</h1>

<?php $content = ob_get_clean(); ?>
<?php require( __DIR__ . '/base.php'); ?>
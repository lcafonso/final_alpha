<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>titulo</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- Our Custom CSS -->
    <?php echo $__env->yieldContent('head'); ?>

    <!-- Font Awesome JS -->
    <script defer src="<?php echo e(asset('vendor/fontawesome-free/js/solid.js')); ?>"></script>
    <script defer src="<?php echo e(asset('vendor/fontawesome-free/js/fontawesome.js')); ?>"></script>
</head>

<body>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="<?php echo e(asset('vendor/jquery/jquery.slim.min.js')); ?>"></script>
    <!-- Popper.JS -->
    <script src="<?php echo e(asset('js/popper.js')); ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('footer'); ?>

</body>

</html>
<?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/admin/normal.blade.php ENDPATH**/ ?>
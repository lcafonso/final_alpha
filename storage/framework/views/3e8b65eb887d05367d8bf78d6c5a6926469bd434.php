<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

<?php echo $__env->make('layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Styles -->
    <?php echo $__env->yieldContent('head'); ?>

</head>
<body>

<div class="d-flex" id="wrapper">
    <?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

</div>

<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('footer'); ?>

</body>
</html>
<?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/postShow.blade.php ENDPATH**/ ?>
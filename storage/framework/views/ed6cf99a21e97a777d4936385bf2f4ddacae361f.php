<?php $__env->startSection('head'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/juxtapose/css/juxtapose.css')); ?>">
    <style>

        body{
            background: -webkit-linear-gradient(left, #393e42, #fff);
        }

        .juxtapose {
            max-width: 1200px;
        }
        .jx-slider {
            margin-top: 1em;
        }
    </style>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    <div class="container">

        <!-- Heading Row -->
        <div class="row align-items-center my-5">


                <div class="juxtapose">
                    <img class="left" src="<?php echo e(asset($postB->file)); ?>" data-label="Original" alt="<?php echo e($postB->name); ?>" data-credit="" style="max-height: 600px"/>
                    <img class="right" src="<?php echo e(asset($postA->file)); ?>" data-label="Actual" alt="<?php echo e($postA->name); ?>" data-credit="" style="max-height: 600px"/>
                </div>



        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    
    <script src="<?php echo e(asset('vendor/juxtapose/js/juxtapose.js')); ?>"></script>

<?php $__env->stopSection(); ?>









<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/posts/compare.blade.php ENDPATH**/ ?>
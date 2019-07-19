<?php $__env->startSection('head'); ?>
    


    <style>

        body{
            background: -webkit-linear-gradient(left, #393e42, #fff);
        }


    </style>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit</h1>

                </div>

                <?php echo Form::model( $user, ['route' => ['adminprofile.update', $user->id], 'method' => 'PUT']); ?>


                    <?php echo $__env->make('admin.profile.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo Form::close(); ?>


            </div><!-- /.blog-main -->

        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/profile/edit.blade.php ENDPATH**/ ?>
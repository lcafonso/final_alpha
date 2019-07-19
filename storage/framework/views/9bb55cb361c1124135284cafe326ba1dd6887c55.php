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
            <div class="col-md-10 col-md-offset-1">
                <img src="<?php echo e(asset($user->profile->file)); ?>" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                <h2><?php echo e($user->name); ?>'s Profile</h2>
                <form enctype="multipart/form-data" action="/admin/profile" method="POST">
                    <label for="file">Update image</label>
                    <input type="file" name="file" >
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-sm btn-primary float-right">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/profile/profile.blade.php ENDPATH**/ ?>
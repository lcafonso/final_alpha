<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver função</h1>

                </div>

                <div>
                    <p><strong>Nome:</strong> <?php echo e($role->name); ?></p>
                    <p><strong>Slug:</strong> <?php echo e($role->slug); ?></p>
                    <p><strong>Body:</strong> <?php echo e($role->body); ?></p>
                </div>

            </div><!-- /.blog-main -->

        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/roles/show.blade.php ENDPATH**/ ?>
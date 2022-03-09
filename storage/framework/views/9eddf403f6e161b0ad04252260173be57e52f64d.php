<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver utilizador</h1>

                </div>

               

                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo e($user->profile->file); ?>" alt="" style="width: 150px; height: auto;">
                    </div>
                    <div class="col-6 ml-5">
                        <p><strong>Nome:</strong> <?php echo e($user->profile->name); ?></p>
                        <p><strong>Sobrenome:</strong> <?php echo e($user->profile->surname); ?></p>
                        <p><strong>Descrição:</strong> <?php echo e($user->profile->body); ?></p>
                        <p><strong>local:</strong> <?php echo e($user->profile->local); ?></p>
                        <p><strong>Pais:</strong> <?php echo e($user->profile->country); ?></p>

                    </div>


                </div>


            </div><!-- /.blog-main -->

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/admin/users/show.blade.php ENDPATH**/ ?>
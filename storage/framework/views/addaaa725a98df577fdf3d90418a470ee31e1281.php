<?php $__env->startSection('content'); ?>
    <div class="container">


        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">

                <div class="card">
                    <div class="card-header">
                        Criar localidade
                    </div>
                    <div class="card-body">

                        <?php echo Form::open(['route' => 'adminplaces.store']); ?>


                            <?php echo $__env->make('admin.places.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php echo Form::close(); ?>



                    </div>
                </div>



            </div><!-- /.blog-main -->

        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/places/create.blade.php ENDPATH**/ ?>
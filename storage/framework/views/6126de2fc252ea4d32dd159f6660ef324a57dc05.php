<div class="form-group">
    <?php echo Form::label('name', 'Nome da Localidade'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'id' => 'name' ]); ?>

</div>


<div class="form-group">
    <?php echo e(Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>


<?php $__env->startSection('scripts'); ?>



<?php $__env->stopSection(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/places/partials/form.blade.php ENDPATH**/ ?>
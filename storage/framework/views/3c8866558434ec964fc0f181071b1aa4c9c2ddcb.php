
<div class="form-group">
    <?php echo Form::label('name', 'Nome da etiqueta'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'id' => 'name']); ?>

</div>
<div class="form-group">
    <?php echo Form::label('slug', 'URL Amigavel'); ?>

    <?php echo Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']); ?>

</div>

<div class="form-group">
    <?php echo e(Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>

<?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/tags/partials/form.blade.php ENDPATH**/ ?>
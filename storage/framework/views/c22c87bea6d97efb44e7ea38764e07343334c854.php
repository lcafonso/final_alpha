<div class="form-group">
    <?php echo Form::label('name', 'Nome da etiqueta'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'id' => 'name' ]); ?>

</div>
<div class="form-group">
    <?php echo Form::label('slug', 'URL Amigavel'); ?>

    <?php echo Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug' ]); ?>

</div>

<div class="form-group">
    <?php echo Form::label('body', 'Descritivo'); ?>

    <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

</div>


<div class="form-group">
    <?php echo e(Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary'])); ?>

</div>


<?php $__env->startSection('scripts'); ?>

    <script>

        $(document).ready(function(){
            $("#name, #slug").keyup(function(){
                var value = string_to_slug($( this ).val());
                $( "#slug" ).val( value );
            });
        });

    </script>

<?php $__env->stopSection(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/categories/partials/form.blade.php ENDPATH**/ ?>
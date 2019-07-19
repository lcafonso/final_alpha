
<div class="form-group">
    <?php echo Form::label('name', 'Nome da tecnologia'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'id' => 'name']); ?>

</div>
<div class="form-group">
    <?php echo Form::label('slug', 'URL Amigavel'); ?>

    <?php echo Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']); ?>

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

<?php $__env->stopSection(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/technologies/partials/form.blade.php ENDPATH**/ ?>
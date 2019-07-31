
<div class="row" style="color: #FFFFFF">
    <div class="col">
        

        <div class="form-group ">
            <?php echo Form::label('name', 'Titulo'); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('category_id', 'Categorias'); ?>

            <?php echo Form::select('category_id', array_merge(['' => 'Todas'], $categs->toArray()), null, ['class' => 'form-control']); ?>

        </div>

        <div class="form-group">
            <label>Entre datas:</label>
            <div class="form-inline">
                <?php echo Form::label('dataInicio', 'Date Inicial: '); ?>

                <div class="space"></div>
                <?php echo Form::date('dataInicio'); ?>

                <div class="space"></div>
                <?php echo Form::label('dataFim', 'Date final: '); ?>

                <div class="space"></div>
                <?php echo Form::date('dataFim'); ?>

            </div>

        </div><br>

    </div>

    <div class="col">
        
        <div class="form-group">
            <?php echo Form::label('tag', 'Etiquetas:'); ?>

            <?php echo Form::select('tag',array_merge(['' => 'Todas'], $tags->toArray()), null, ['class' => 'form-control']); ?>


        </div>


        <div class="form-group" align="right">
            <?php echo e(Form::submit('Iniciar Procura', ['class' => 'btn btn-sm btn-primary'])); ?>

        </div>

        <br>

    </div>
</div>
<?php /**PATH D:\laragon\www\final_alpha\resources\views/web/_advform.blade.php ENDPATH**/ ?>
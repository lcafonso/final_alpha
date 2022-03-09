
<div class="row" style="color: #FFFFFF">
    <div class="col">
        


        <div class="col-8 col-sm-6">
            <div class="form-group">
                <?php echo Form::label('district', 'Selecione o Distrito'); ?>

                <?php echo Form::select(
                    'district',
                    $districts,
                    null,
                    ['class' => 'form-control','id'=>'district', 'name'=>'district']
                    ); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('district', 'Selecione o Concelho'); ?>

                <?php echo Form::select(
                    'county',
                    ['0'=>'Selecione o Concelho'],
                    null,
                    ['class' => 'form-control','id'=>'county', 'name'=>'county']
                    ); ?>

            </div>

            <div class="form-group" >
                <?php echo Form::label('place', 'Selecione a localidade'); ?>

                <?php echo Form::select(
                    'place',
                    ['0'=>'Selecione a localidade'],
                    null,
                    ['class' => 'form-control','id'=>'place', 'name'=>'place']
                    ); ?>

            </div>


        </div>




    </div>

    <div class="col">
        



        <div class="form-group" align="right">
            <?php echo e(Form::submit('Iniciar Procura', ['class' => 'btn btn-sm btn-primary'])); ?>

        </div>



    </div>
</div>
<?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/web/_localform.blade.php ENDPATH**/ ?>
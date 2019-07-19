<div class="container mt-2">

    <div class="form-group ">
        <?php echo Form::label('email', 'Identificação'); ?>

        <?php echo Form::Label('email',$user->email, ['class' => 'form-control', 'id' => 'email', 'name' => 'email']); ?>

    </div>

    <div class="form-group ">
        <?php echo Form::label('name', 'Nome Completo'); ?>

        <?php echo Form::label('name', $user->name, ['class' => 'form-control', 'id' => 'name', 'name' => 'name']); ?>

    </div>

    <div class="form-group ">
        <?php echo Form::label('profileName', 'Primeiro Nome'); ?>

        <?php echo Form::label('profileName', $user->profile->name, ['class' => 'form-control', 'id' => 'profileName', 'name' => 'profileName']); ?>

    </div>

    <div class="form-group ">
        <?php echo Form::label('profileSurname', 'Sobrenome'); ?>

        <?php echo Form::label('profileSurname', $user->profile->surname, ['class' => 'form-control', 'id' => 'profileSurname', 'name' => 'profileSurname']); ?>

    </div>

    <div class="form-group ">
        <?php echo Form::label('profilePhone', 'Telefone'); ?>

        <?php echo Form::label('profilePhone', $user->profile->phone, ['class' => 'form-control', 'id' => 'profilePhone', 'name' => 'profilePhone']); ?>

    </div>

    <div class="form-group ">
        <?php echo Form::label('profileGenre', 'Sexo'); ?>

        <?php echo Form::label('profileGenre', $user->profile->genre, ['class' => 'form-control', 'id' => 'profileGenre', 'name' => 'profileGenre']); ?>

    </div>

</div>

<?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/profile/partials/showform.blade.php ENDPATH**/ ?>
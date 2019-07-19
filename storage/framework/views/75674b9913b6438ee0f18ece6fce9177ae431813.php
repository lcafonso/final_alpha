
<div class="form-group ">
    <?php echo Form::label('name', 'Nome completo'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'name' => 'name']); ?>

</div>

<div class="form-group ">
    <?php echo Form::label('body', 'Um resumo'); ?>

    <?php echo Form::textarea('body', $user->profile->body, ['class' => 'form-control', 'id' => 'body', 'name' => 'body' ]); ?>


</div>

<div class="form-group ">
    <?php echo Form::label('profileName', 'Nome Proprio'); ?>

    <?php echo Form::text('profileName', $user->profile->name, ['class' => 'form-control', 'id' => 'profileName', 'name' => 'profileName']); ?>

</div>

<div class="form-group ">
    <?php echo Form::label('profileSurname', 'Sobrenome'); ?>

    <?php echo Form::text('profileSurname', $user->profile->surname, ['class' => 'form-control', 'id' => 'profileSurname', 'name' => 'profileSurname']); ?>

</div>

<div class="form-group ">
    <?php echo Form::label('birth', 'Data de nascimento'); ?>

    <?php echo Form::text('birth', $user->profile->birth, ['class' => 'form-control', 'id' => 'birth', 'name' => 'birth']); ?>

</div>

<div class="form-group ">
    <?php echo Form::label('local', 'Local'); ?>

    <?php echo Form::text('local', $user->profile->local, ['class' => 'form-control', 'id' => 'local', 'name' => 'local']); ?>

</div>

<div class="form-group ">
    <?php echo Form::label('country', 'Pais'); ?>

    <?php echo Form::text('country', $user->profile->country, ['class' => 'form-control', 'id' => 'country', 'name' => 'country']); ?>

</div>

<div class="form-group ">
    <?php echo Form::label('genre', 'Sexo'); ?>

    <label>
        <?php if($user->profile->genre == 'MALE'): ?>
            <?php echo Form::radio('genre', 'MALE',true ); ?> Masculino
        <?php else: ?>
            <?php echo Form::radio('genre', 'MALE'); ?> Masculino
        <?php endif; ?>
    </label>
    <label>
        <?php if($user->profile->genre == 'FEMALE'): ?>
            <?php echo Form::radio('genre', 'FEMALE', true ); ?> Feminino
        <?php else: ?>
            <?php echo Form::radio('genre', 'FEMALE'); ?> Feminino
        <?php endif; ?>
    </label>
</div>

<div class="form-group ">
    <?php echo Form::label('social1', 'Redes Sociais'); ?>

    <?php echo Form::text('social1', $user->profile->social1, ['class' => 'form-control', 'id' => 'social1', 'name' => 'social1']); ?>

    <?php echo Form::text('social2', $user->profile->social2, ['class' => 'form-control', 'id' => 'social2', 'name' => 'social2']); ?>

    <?php echo Form::text('social3', $user->profile->social3, ['class' => 'form-control', 'id' => 'social3', 'name' => 'social3']); ?>

</div>

<div class="form-group ">
    <?php echo Form::label('web', 'Pagina pessoal'); ?>

    <?php echo Form::text('web', $user->profile->web, ['class' => 'form-control', 'id' => 'web', 'name' => 'web']); ?>

</div>

<div class="form-group ">
    <?php echo Form::label('phone', 'Telefone'); ?>

    <?php echo Form::text('phone', $user->profile->phone, ['class' => 'form-control', 'id' => 'phone', 'name' => 'phone']); ?>

</div>

<hr>
<div class="form-group row">
    <div class="col-md-4">
        <?php echo Form::label('password', 'Password'); ?>

    </div>
    <div class="col">
        <?php echo Form::password('password', null, ['class' => 'form-control', 'id' => 'password', 'name' => 'password']); ?>

    </div>
</div>
<div class="form-group row">
    <div class="col-md-4">
        <?php echo Form::label('reppass', 'Repetir a password'); ?>

    </div>
    <div class="col">
        <?php echo Form::password('reppass', null, ['class' => 'form-control', 'id' => 'reppass', 'name' => 'reppass']); ?>

    </div>
</div>
<hr>
<div class="form-group" align="right">
    <?php echo Form::submit('Salvar as alterações', null, ['class' => 'btn btn-sm btn-primary float-left']); ?>

</div><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/profile/partials/form.blade.php ENDPATH**/ ?>
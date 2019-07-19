
<div class="row">

    <div class="col-md-2">
        <label>User Id</label>
    </div>
    <div class="col-md-8">
        <p><?php echo e($user->email); ?></p>
    </div>

</div>

<div class="row">
    <div class="col-md-2">
        <label>Nome</label>
    </div>
    <div class="col-md-8">
        <p><?php echo e($user->profile->name); ?></p>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label>Sobrenome</label>
    </div>
    <div class="col-md-8">
        <p><?php echo e($user->profile->surname); ?></p>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label>Email</label>
    </div>
    <div class="col-md-8">
        <p><?php echo e($user->email); ?></p>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label>Telefone</label>
    </div>
    <div class="col-md-8">
        <p><?php echo e($user->profile->phone); ?></p>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label>Sexo</label>
    </div>
    <div class="col-md-8">
        <p><?php echo e($user->profile->genre); ?></p>
    </div>
</div>
<?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/profile/partials/basicform.blade.php ENDPATH**/ ?>
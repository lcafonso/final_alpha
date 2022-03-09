<?php $__env->startSection('head'); ?>
    


    <style>

        body{
            background: -webkit-linear-gradient(left, #393e42, #fff);
        }


    </style>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#publicacoes" data-toggle="tab" class="nav-link">Publicações</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#seguidores" data-toggle="tab" class="nav-link">Seguidores</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#seguindo" data-toggle="tab" class="nav-link">Seguindo</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h5>Perfil do utilizador</h5>

                        <a href="<?php echo e(route('adminprofile.edit', $user->id)); ?>" class="badge badge-dark badge-pill mb-5">
                            <i class="fas fa-user-edit"> editar perfil</i>
                        </a>

                        <div class="row">
                            <div class="col-md-6">
                                <h6>Nome Completo</h6>
                                <p>
                                    <?php echo e($user->name); ?>

                                </p>
                                <h6>Função</h6>
                                <p>
                                    <?php echo e($role->name); ?>

                                </p>
                                <h6>Sobre</h6>
                                <p>
                                    <?php echo e($user->profile->body); ?>

                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6>Redes Sociais</h6>
                                <a href="#" class="badge badge-dark badge-pill"><?php echo e($user->profile->social1); ?></a>
                                <a href="#" class="badge badge-dark badge-pill"><?php echo e($user->profile->social1); ?></a>
                                <a href="#" class="badge badge-dark badge-pill"><?php echo e($user->profile->social1); ?></a>

                                <hr>
                                <span class="badge badge-primary"><i class="fa fa-user"></i> <?php echo e($followers->count()); ?> Seguidores</span>
                                <span class="badge badge-success"><i class="fa fa-cog"></i> <?php echo e($followings->count()); ?> Seguindo</span>
                                <span class="badge badge-danger"><i class="fa fa-eye"></i> <?php echo e($numberOfPosts['publicadas']); ?>/<?php echo e($numberOfPosts['total']); ?> Publicações</span>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Dados da Conta</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <tbody>

                                    <tr>
                                        <td>
                                            Nome de Utilizador/Email:<strong><?php echo e($user->email); ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Telefone:<strong><?php echo e($user->profile->phone); ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Data de nascimento:<strong><?php echo e($user->profile->birth); ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Local:<strong><?php echo e($user->profile->local); ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Pais:<strong><?php echo e($user->profile->country); ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sexo:<strong><?php echo e($user->profile->genre); ?></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="publicacoes">

                        <div class="container">

                            <div class="row text-center text-lg-left">

                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <a href="<?php echo e(route('detail', $post->slug)); ?>" class="d-block mb-4 h-100">
                                            <img class="img-fluid img-thumbnail" src="<?php echo e($post->file); ?>" style="height: auto; width: 400;" alt="">
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <?php echo e($posts->render()); ?>

                        </div>

                    </div>
                    <div class="tab-pane" id="seguidores">
                        <?php $__currentLoopData = $followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Nome Completo</h6>
                                    <p>
                                        <?php echo e($follower->name); ?>

                                    </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="tab-pane" id="seguindo">
                        <?php $__currentLoopData = $followings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $following): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Nome Completo</h6>
                                    <p>
                                        <?php echo e($following->name); ?>

                                    </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                <img src="<?php echo e(asset( $user->profile->file )); ?>" class="mx-auto img-fluid rounded-circle d-block" alt="avatar">
                <h6 class="mt-2">Escolher uma foto diferente</h6>
                <label class="custom-file">
                    <form enctype="multipart/form-data" action="/admin/profile" method="POST">
                        <input type="file" name="file" >
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" class="btn btn-sm btn-primary float-center">
                    </form>

                </label>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/admin/profile/index.blade.php ENDPATH**/ ?>
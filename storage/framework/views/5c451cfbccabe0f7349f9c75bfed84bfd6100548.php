

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Utilizadores não confirmados</h3>
            </div>
            <div class="panel-body">

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Publicado em</th>
                        <th>Titulo</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->created_at); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td width="10px">

                            </td>
                            <td width="10px">

                            </td>
                            <td width="10px">
                                <a href="<?php echo e(route('adminposts.showUser', $user->id)); ?>" class="btn btn-sm btn-default">Ver</a>
                            </td>


                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <?php echo e($posts->render()); ?>

            </div>
        </div>
    </div>



<?php /**PATH F:\laragon\www\digitalandscape\resources\views/admin/main/partials/userNotConfirm.blade.php ENDPATH**/ ?>
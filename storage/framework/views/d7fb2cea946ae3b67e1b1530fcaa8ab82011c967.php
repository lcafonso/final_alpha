<?php $__env->startSection('head'); ?>
    

    <style>
        body{
            background: -webkit-linear-gradient(left, #33775f, #fff);
        }


    </style>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <h1 class="my-4">Ultimas Publicações
                    <small></small>
                </h1>

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <!-- Blog Post -->
                        <div class="card mb-4">
                            <img class="card-img-top" src="<?php echo e($post->file); ?>" style="max-width: 750px;" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title"> <?php echo e($post->name); ?> </h2>
                                <p class="card-text"> <?php echo e($post->excerpt); ?> </p>
                                <a href="<?php echo e(route('detail', $post->slug)); ?>" class="btn btn-primary">
                                    Detalhes
                                    <i class="fas fa-arrow-right"></i>
                                </a>

                            </div>
                            <div class="card-footer text-muted">
                                Publicado em <?php echo e($post->created); ?> por
                                <a href="#"><?php echo e($post->user->name); ?></a>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- Pagination -->
                    <div>
                        <?php echo e($posts->render()); ?>

                    </div>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Procurar</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Procurar por...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Ir!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categorias</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <ul class="mb-0">
                                    <?php $__currentLoopData = $categs->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row">
                                        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-6">
                                            <li>
                                                <a href="<?php echo e(route('category', $cat->slug )); ?>" ><?php echo e($cat->name); ?></a>
                                            </li>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Mapa</h5>
                    <div class="card-body">
                        <img src="<?php echo e(asset('img/Portugal_location_map.svg')); ?>" style="max-width: 100%;">
                    </div>
                </div>


            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/web/publications.blade.php ENDPATH**/ ?>
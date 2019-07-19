<?php $__env->startSection('head'); ?>
    

    <style>

    </style>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    <div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Publicação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Detalhes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Mais Imagens</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Tab home -->
            <div class="tab-pane container active" id="home">
                <h3 class="pb-4 mb-4 font-italic border-bottom mt-5">
                    <?php echo e($post->name); ?>

                </h3>



                <div class="blog-post">
                    <h4 class="blog-post-title">
                        <a href="<?php echo e(route('category', $post->category->slug )); ?>">
                            <?php echo e($post->category->name); ?>

                        </a>

                    </h4>
                    <p class="blog-post-meta"><?php echo e($post->created); ?> por: <a href="#">username</a></p>

                    <img src="<?php echo e($post->file); ?>" alt="" width="740" height="auto" >
                    <hr>
                    <h3>Resumo</h3>
                    <p><?php echo e($post->excerpt); ?></p>
                    <hr>
                    <h3>Descrição</h3>
                    <p><?php echo $post->body; ?> </p>
                    <hr>
                    Etiquetas
                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('tag', $tag->slug )); ?>">
                            <?php echo e($tag->name); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><!-- /.blog-post -->

            </div>
            <!-- Tab menu1 -->
            <div class="tab-pane container fade" id="menu1">
                <div class="p-4 mb-3 bg-light rounded  mt-5">
                    <h4 class="font-italic">Informação Adicional</h4>
                    <p class="mb-0">Equipamento: <em><?php echo e($post->detail->equipment); ?></em></p>
                    <p class="mb-0">Exposição: <em><?php echo e($post->detail->exposure); ?></em></p>
                    <p class="mb-0">Abertura: <em><?php echo e($post->detail->aperture); ?></em></p>
                    <p class="mb-0">ISO: <em><?php echo e($post->detail->iso); ?></em></p>
                    <p class="mb-0">Dimensoes: <em><?php echo e($post->detail->dimensionX); ?></em> x <em><?php echo e($post->detail->dimensionY); ?></em> </p>
                    <p class="mb-0">Resolução: <em><?php echo e($post->detail->resolution); ?></em></p>
                    <p class="mb-0">Tecnologia: <em><?php echo e($tech->name); ?></em></p>


                </div>

            </div>
            <!-- Tab menu2 -->
            <div class="tab-pane container fade" id="menu2">

                <div class="row">
                    <!-- Page Content -->
                    <div class="container mt-5">

                        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Imagens Relacionadas</h1>

                        <hr class="mt-2 mb-5">

                        <div class="row text-center text-lg-left">

                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <a href="<?php echo e(route('detail', $post->slug)); ?>" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="<?php echo e($post->file); ?>" style="height: auto; width: 400;" alt="">
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                    </div>
                    <!-- /.container -->
                </div>

            </div>
        </div>



    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/posts/show.blade.php ENDPATH**/ ?>
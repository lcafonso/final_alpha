<?php $__env->startSection('head'); ?>
    

    <style>
        body{
            background: -webkit-linear-gradient(left, #33775f, #fff);
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: 1s;
            z-index: 10000;
        }
        .preloader:before {
            content: '';
            position: absolute;
            left: 0;
            width: 50%;
            height: 100%;
            background: #000;
            transition: 1s;
        }
        .preloader.complete:before {
            left: -50%;
        }
        .preloader:after {
            content: '';
            position: absolute;
            right: 0;
            width: 50%;
            height: 100%;
            background: #000;
            transition: 1s;
        }
        .preloader.complete:after {
            right: -50%;
        }

        .ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 150px;
            height: 150px;
            background: transparent;
            border: 3px solid #3c3c3c;
            border-radius: 50%;
            text-align: center;
            line-height: 150px;
            font-family: Sans-Serif;
            font-size: 12px;
            color: #fff000;
            letter-spacing: 4px;
            text-transform: uppercase;
            text-shadow: 0 0 10px #fff000;
            box-shadow: 0 0 20px rgba(0,0,0,.5);
            z-index:10010;
        }
        .ring:before{
            content:'';
            position: absolute;
            margin: 0;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            border: 3px solid transparent;
            border-top: 3px solid #fff000;
            border-right: 3px solid #fff000;
            border-radius: 50%;
            animation: animateCircle 2s linear infinite;
        }
        .ring span {
            display: block;
            position: absolute;
            top: calc(50% - 2px);
            left: 50%;
            width: 50%;
            height: 4px;
            background: transparent;
            transform-origin: left;
            animation: animate 2s linear infinite;
        }

        .ring span:before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #fff000;
            top: -6px;
            right: -8px;
            box-shadow: 0 0 20px #fff000;
        }

        .preloader.complete {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        @keyframes  animate {
            0% {
                transform: rotate(45deg);
            }
            100% {
                transform: rotate(405deg);
            }
        }
        @keyframes  animateCircle {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="preloader">
        <div class="ring">
            Carregando
            <span></span>
        </div>
    </div>
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

    
    
    <script type="text/javascript">
        $(window).on('load', function () {
            $('.preloader').addClass('complete')
        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/web/publications.blade.php ENDPATH**/ ?>
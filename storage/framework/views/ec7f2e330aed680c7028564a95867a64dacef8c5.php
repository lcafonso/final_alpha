<?php $__env->startSection('head'); ?>
    

    <style class="cp-pen-styles">

        * {
            box-sizing: border-box;
        }

        body {
            background: -webkit-linear-gradient(left, #3b546b, #fff);
        }

        .title {
            text-align: center;
            font-family: 'Oswald';
            font-weight: 100;
            font-size: 3.75rem;
            letter-spacing: 5px;
            background: linear-gradient(rgba(255, 0, 0, 0), #444, rgba(255, 0, 0, 0));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0;
        }
        @media  screen and (min-width: 37.5em) {
            .title {
                font-size: 4.75rem;
            }
        }

        p {
            margin: 0 auto 2rem;
            text-align: center;
            font-family: 'oswald';
            font-size: 1.25rem;
            color: #444;
            font-weight: 100;
            width: 90%;
        }
        @media  screen and (min-width: 37.5em) {
            p {
                height: 70%;
            }
        }

        .case-study-gallery {
            margin-top: 50px;
            width: 90%;
            margin: 50px auto;
            max-width: 1100px;
        }

        .case-study {
            position: relative;
            display: block;
            width: 90%;
            height: 250px;
            margin: 0 auto 2rem;
            background-size: cover;
            border-radius: 10px;
            box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            transition: all .4s ease;
        }
        @media  screen and (min-width: 37.5em) {
            .case-study {
                height: 300px;
            }
        }
        @media  screen and (min-width: 45em) {
            .case-study {
                display: inline-block;
                width: 45%;
                margin-left: 25px;
            }
        }

        .case-study__img {
            width: 90%;
            display: block;
            margin-top: 50%;
            transform: translateY(50%);
            margin: 0 auto;
        }

        .case-study__overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            z-index: 10;
        }
        .case-study__overlay:after {
            content: '';
            width: 100%;
            border-radius: 10px;
            height: 100%;
            background-color: #202020;
            opacity: 0;
            position: absolute;
            top: 0;
            z-index: -10;
            left: 0;
            transition: all .3s ease;
        }

        .case-study__title {
            position: relative;
            top: -200px;
            margin-bottom: 2rem;
            margin-top: 4rem;
            font-size: 1.50rem;
            font-family: 'Oswald';
            font-weight: 100;
            color: white;
            text-align: center;
            letter-spacing: 5px;
            transition: all 0.3s cubic-bezier(0.3, 0, 0, 1.3);
        }

        .case-study__link {
            position: relative;
            display: block;
            width: 20%;
            top: 200px;
            padding: 10px;
            margin: 0 auto;
            font-family: 'Oswald';
            color: white;
            letter-spacing: 3px;
            text-decoration: none;
            text-align: center;
            border: .5px solid white;
            border-radius: 3px;
            font-size: 1.25em;
            transition: all 0.3s cubic-bezier(0.3, 0, 0, 1.3);
        }

        .case-study__link:hover {
            background-color: #8c8c8c;
            color: #202020;
        }

        .case-study:hover .case-study__title {
            top: 0;
        }
        .case-study:hover .case-study__link {
            top: 0;
        }
        .case-study:hover .case-study__overlay:after {
            opacity: .75;
        }





    </style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



    <div class="case-study-gallery">
        <h1 class="title">Publicações</h1>
        <p>Imagens publicadas ao longo do tempo</p>
        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1></h1>

                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="<?php echo e(route('adminposts.create')); ?>" class="btn btn-sm btn-outline-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            Novo registo
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="case-study" style="background-image: url('<?php echo e($post->file); ?>');">
                <figure>
                    <img class="case-study__img" src="<?php echo e(asset('img/logo_b1.png')); ?>" style="height: 100px; width: auto" alt="" />
                </figure>
                <div class="case-study__overlay">
                    <h2 class="case-study__title"><?php echo e($post->name); ?></h2>

                    <div class="row">
                        <a class="case-study__link" href="<?php echo e(route('adminposts.show', $post->id)); ?>">
                            <i class="far fa-eye"></i>
                        </a>
                        <?php echo Form::open(['route' => ['adminposts.destroy', $post->id], 'method' => 'DELETE']); ?>

                            <button class="case-study__link  btn-outline-danger" style="width: 250%;background-color: Transparent;">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        <?php echo Form::close(); ?>

                        <a class="case-study__link" href="<?php echo e(route('adminposts.edit', $post->id)); ?>">
                            <i class="fas fa-pencil-alt"></i>
                        </a>

                    </div>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <nav class="blog-pagination">
            <?php echo e($posts->render()); ?>

        </nav>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    
    <script >


    </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>
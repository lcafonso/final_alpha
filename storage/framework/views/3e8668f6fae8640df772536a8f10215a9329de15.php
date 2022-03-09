<?php $__env->startSection('head'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/juxtapose/css/juxtapose.css')); ?>">
    <style>

        .juxtapose {
            max-width: 800px;
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

    <!--- Start contribut Section -->
    <div id="contribut" class="offset">
        <div class="col-md-12 narrow text-center">
            <h1>O que é este projeto?</h1>
            <div class="heading-underline"></div>
            <p class="lead">O recurso de repetição
                de fotografias tornou-se uma ferramenta valiosa para comunicar as mudança causadas ao longo do tempo numa
                determinada área. O nosso intuito é começar uma tarefa ardua através da captura de imagens que mostrem essass mudanças ao longo do tempo
                sendo para isso essencial a ajuda dos nosso utilizadores que podem publicar suas fotografias e partilha-las com
                todos os investigadores. Este é um repositório de imagens publicadas por diversos colaboradores que podem ser utilizadas para estudos relacionados com as alterações do meio ambiente.
                Os colaboradore compremetem-se a publicar e ceder os direitos de utilização para fins académicos e de pesquisa.  </p>
            <a class="btn btn-primary btn-md" href="#tools">ver mais!</a>
        </div>
    </div>
    <!--- End contribut Section -->

    <!--- Start work Section -->
    <div id="work" class="offset text-center">
        <div class="jumbotron fixed">
            <div class="narrow">
                <div class="col-12">
                    <h3 class="heading">Trabalho de Campo</h3>
                    <div class="heading-underline"></div>
                </div>

                <div class="home-page__images">
                    <div class="home-page__images__item--1"></div>
                    <div class="home-page__images__item--2"></div>
                    <div class="home-page__images__item--3"></div>
                    <div class="home-page__images__item--4"></div>
                </div>


            </div>
        </div>
    </div>
    <!--- End work Section -->




    <!--- Start tools Section -->
    <div id="tools" class="offset">
        <div class="row align-items-center" style="margin-top: 0;">
        <div class="col-lg-7" style="margin: 0;">
            <div class="juxtapose"  >
                <img class="left" src="http://online.wsj.com/media/LIONDOORA.jpg" data-label="2009" alt="Maidan square in 2009" data-credit="" style="max-height: 400px"/>
                <img class="right" src="http://online.wsj.com/media/LIONDOOR_2A.jpg" data-label="2014" alt="Maidan square in 2014" data-credit="" style="max-height: 400px"/>
            </div>
        </div>
        <div class="col-lg-5 offset text-center">
            <h3 class="heading">Ferramentas de Apoio</h3>
            <div class="heading-underline"></div>
            <p>Com a ajuda da ferramenta de comparação, podemos ver as fotografias com repetição, sobrepondo uma a outra, assim podemos analisar a imagem principal e a foto repetida com mais detalhes.</p>
            <a class="btn btn-primary" href="<?php echo e(route('home')); ?>">ver mais!</a>
        </div>
        </div>
    </div>
    <!--- End Course Section -->


    <!--- Start projeto Section -->
    <div id="projeto" class="offset text-center">

        <div class="fixed-background fixed">

            <div class="row dark">
                <div class="col-md-12">
                    <h3 class="heading">Um contributo importante</h3>
                    <div class="heading-underline"></div>
                    <p class="lead">Envie suas fotos, partilhe com pessoas, grupos de investigação e outros interessados na pesquisas sobre mudanças climáticas, vegetação, paisagismo, etc.!</p>
                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('gallery')); ?>" >Enviar fotografias</a>

                </div>
            </div>

        </div>

    </div>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    
    <script src="<?php echo e(asset('vendor/juxtapose/js/juxtapose.js')); ?>"></script>

    <script type="text/javascript">
        $(window).on('load', function () {
            $('.preloader').addClass('complete')
        })
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laragon\www\digitalandscape\resources\views/web/home.blade.php ENDPATH**/ ?>
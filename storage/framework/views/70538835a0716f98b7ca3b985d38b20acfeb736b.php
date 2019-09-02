<!-- Page Header -->
<?php if($pageData['smenu'] == 1): ?>

    <header>


        <!--- Video Backgrond -->
        <div class="video-background">
            <div class="video-wrap">
                <div id="video">
                    <video id="bgvid" autoplay loop muted playsinline>
                        <source src="<?php echo e(asset('img/videos/promo.mp4')); ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <!--- Caption -->
        <div class="caption text-left ml-5">
            <h3>REPOSITÓRIO DE FOTOGRAFIAS</h3>
            <h1>DIGITAL LANDSCAPE</h1>
            <h5>As mudanças paisagisticas ao longo do tempo</h5>

            <a href="#contribut" class="btn btn-outline-light btn-lg">Mais Informações</a>

        </div>

        <!--- Apoios -->
        <div class="home-page__cover__footer">
            <div class="title">Apoio:</div>
            <a href="http://www.cimo.esa.ipb.pt" target="_blank">
                <img src="<?php echo e(asset('img/2018CIMOBranco.png')); ?>" alt="" style=" opacity: 0.5; filter: alpha(opacity=50)">
            </a>

        </div>

    </header>

<?php else: ?>

    <header class="masthead" style="background-image: url(<?php echo e(asset( $pageData['bg'] )); ?> ); max-height: 350px; )">


    <div class="overlay"></div>


        <div class="row" >
            <div class="col-lg-8 col-md-12 mx-auto">
                <?php if($pageData['smenu'] != 1): ?>
                    <div class="post-heading">
                        <!-- Global Page Section Start  -->
                        <section class="global-page-header" >

                                <div class="row" >
                                    <div class="col-md-6" >
                                        <div class="block">
                                            <h2 ><?php echo e($pageData['title']); ?></h2>
                                        </div>
                                    </div>
                                    <?php if($pageData['smenu'] == 23): ?>
                                        <div class="col-md-6" >
                                            <form action="<?php echo e(route('simple_search')); ?>" method="GET">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Titulo" aria-describedby="basic-addon2" name="search">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                                                        <a class="btn btn-secondary" href="#" onclick="toggle_visibility('foo');"><i class="fas fa-sliders-h"></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    <?php endif; ?>
                                </div>

                        </section>
                    </div>
                <?php endif; ?>
            </div>
        </div>


    </header>




<?php endif; ?>




<?php /**PATH D:\laragon\www\final_alpha\resources\views/layouts/partials/header.blade.php ENDPATH**/ ?>


<div class="container mt-2">

    <?php if($metodo == 'edit'): ?>
        <a href="<?php echo e(url()->previous()); ?>">Publicações></a>
        <h3 class="title">Editar Publicação</h3>
    <?php else: ?>
        <a href="<?php echo e(url()->previous()); ?>">Publicações></a>
        <h3 class="title">Nova Publicação</h3>
    <?php endif; ?>
    <hr>

    <?php echo Form::hidden('user_id', auth()->user()->id); ?>

    <div class="row">
        <div class="col">
            

            <div class="form-group ">
                <?php echo Form::label('name', 'Titulo'); ?>

                <?php echo Form::text('name', null, ['class' => 'form-control', 'id' => 'name' ]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('file', 'Escolha a imagem'); ?>

                <div id="image-holder" style="width: auto;height: 200px;  background-color: white">
                    <?php if($metodo == 'edit'): ?>
                        <img  class="center" src="<?php echo e(asset($post->file)); ?>" style="width: auto;height: 200px; display: block; margin-left: auto; margin-right: auto;">
                    <?php endif; ?>
                </div>
                <?php echo Form::file('file',[ 'id' => 'file' ]); ?>


            </div>

            <div class="form-group">
                <?php echo Form::label('category_id', 'Categorias'); ?>

                <?php echo Form::select('category_id', $categories, null, ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('excerpt', 'Resumo'); ?>

                <?php echo Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']); ?>

            </div>

        </div>

        <div class="col">
            

            <div class="form-group">
                <?php echo Form::label('slug', 'URL Amigavel'); ?>

                <?php echo Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug' ]); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('body', 'Descrição detalhada'); ?>

                <?php echo Form::textarea('body', (!empty($post->body)?$post->body:null), ['class' => 'form-control', 'id' => 'body', 'name' => 'body' ]); ?>

            </div>


        </div>

    </div>
    <hr>
    <div class="form-group">
        <?php echo Form::label('tags', 'Etiquetas'); ?>

        <div>
            <?php $__currentLoopData = $tags->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-2 portfolio-item">
                            <label>
                                <?php echo Form::checkbox('tags[]', $tag->id); ?>

                                <?php echo e($tag->name); ?>

                            </label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12" style="background-color: #040505; color: #fff"><h1>Informação adicional</h1><small> Opcional</small></div>

        </div>
        <div class="row">
            <div class="col-6 col-sm-4">
                <h4 class="my-3">Detalhes</h4>
                <ul class="list-unstyled list-group">


                    <li class="list-group-item"  style="font-size: 14px;" data-toggle="tooltip" data-placement="left" title="Equipamento Utilizado">
                        <div class="inner-addon left-addon">
                            <img class="glyphicon" src="<?php echo e(asset('img/camera-retro.svg')); ?>"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            <?php echo Form::text('cameraModel', (!empty($post->detail->equipment)?$post->detail->equipment:null), ['class' => 'form-control', 'id' => 'cameraModel' ]); ?>


                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="row " data-toggle="tooltip" data-placement="left" title="Dimensões XY">
                            <div class="inner-addon left-addon ml-3" style="width: 45%">
                                <img class="glyphicon" src="<?php echo e(asset('img/resize-tool.svg')); ?>"  alt="" style="max-height: 100%; fill: #385d7a;" >
                                <?php echo Form::text('pdX', (!empty($post->detail->dimensionX)?$post->detail->dimensionX:null), ['class' => 'form-control text-right', 'id' => 'pdX' ]); ?>

                            </div>

                            <div class="inner-addon left-addon ml-1" style="width: 44%">
                                <?php echo Form::text('pdY', (!empty($post->detail->dimensionY)?$post->detail->dimensionY:null), ['class' => 'form-control text-right', 'id' => 'pdY' ]); ?>

                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;" data-toggle="tooltip" data-placement="left" title="Distancia focal">
                        <div class="inner-addon left-addon">
                            <img class="glyphicon" src="<?php echo e(asset('img/focus.svg')); ?>"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            <?php echo Form::text('focalDistance', (!empty($post->detail->resolution)?$post->detail->resolution:null), ['class' => 'form-control', 'id' => 'focalDistance' ]); ?>

                        </div>
                    </li>

                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="inner-addon left-addon" data-toggle="tooltip" data-placement="left" title="Abertura">
                            <img class="glyphicon" src="<?php echo e(asset('img/svg-shutter-icon-2.svg')); ?>"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            <?php echo Form::text('aperture', (!empty($post->detail->aperture)?$post->detail->aperture:null), ['class' => 'form-control', 'id' => 'aperture' ]); ?>

                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="inner-addon left-addon" data-toggle="tooltip" data-placement="left" title="Tempo de Exposição">
                            <img class="glyphicon" src="<?php echo e(asset('img/exposure.svg')); ?>"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            <?php echo Form::text('exposureTime', (!empty($post->detail->exposure)?$post->detail->exposure:null), ['class' => 'form-control', 'id' => 'exposureTime' ]); ?>

                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="inner-addon left-addon" data-toggle="tooltip" data-placement="left" title="ISO">
                            <img class="glyphicon" src="<?php echo e(asset('img/iso-file-format.svg')); ?>"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            <?php echo Form::text('ISO', (!empty($post->detail->iso)?$post->detail->iso:null), ['class' => 'form-control', 'id' => 'ISO' ]); ?>

                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="row " data-toggle="tooltip" data-placement="left" title="Localização Longitude/Latitude">
                            <div class="inner-addon left-addon ml-3" style="width: 45%">
                                <img class="glyphicon" src="<?php echo e(asset('img/world-location.svg')); ?>"  alt="" style="max-height: 100%; fill: #385d7a;" >
                                <?php echo Form::text('imgLong', (!empty($post->detail->longitude)?$post->detail->longitude:null), ['class' => 'form-control text-right', 'id' => 'imgLong' ]); ?>

                            </div>
                            <div class="inner-addon left-addon ml-1" style="width: 44%">
                                <?php echo Form::text('imgLat', (!empty($post->detail->latitude)?$post->detail->latitude:null), ['class' => 'form-control text-right', 'id' => 'imgLat' ]); ?>

                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="inner-addon left-addon" data-toggle="tooltip" data-placement="left" title="Tecnologia Utilizada">
                            <img class="glyphicon" src="<?php echo e(asset('img/chip.svg')); ?>"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            <?php echo Form::select( 'technologie', $technologies, null, ['class' => 'form-control text-right','id'=>'technologie', 'name'=>'technologie']); ?>

                            
                        </div>
                    </li>


                </ul>
            </div>



            <div class="col-6 col-sm-4">
                <h4 class="my-3">Localização</h4>
                <div class="form-group">
                    <?php echo Form::label('district', 'Selecione o Distrito'); ?>

                    <?php echo Form::select(
                        'district',
                        $districts,
                        null,
                        ['class' => 'form-control','id'=>'district', 'name'=>'district']
                        ); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('district', 'Selecione o Concelho'); ?>

                    <?php echo Form::select(
                        'county',
                        ['0'=>'Selecione o Concelho'],
                        null,
                        ['class' => 'form-control','id'=>'county', 'name'=>'county']
                        ); ?>

                </div>

                <div class="form-group" >
                    <?php echo Form::label('place', 'Selecione a localidade'); ?>

                    <?php echo Form::select(
                        'place',
                        ['0'=>'Selecione a localidade'],
                        null,
                        ['class' => 'form-control','id'=>'place', 'name'=>'place']
                        ); ?>

                </div>


            </div>
            <div class="col-6 col-sm-4">
                <h4 class="my-3">Mapa</h4>
                <div id="map" class="map"></div>
                <div id="overlay" style="background-color: red; width: 20px; height: 20px; border-radius: 10px;"></div>
            </div>

        </div>
    </div>



    <?php if($metodo == 'edit'): ?>
    <!-- Page Content -->
    <div class="container">

        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Suas publicações</h1>

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
    <?php endif; ?>


        <hr>
        <div class="form-group">
            <?php echo Form::label('status', 'Estado actual:'); ?>

            <br>
            <label>
                <?php echo Form::radio('status', 'PUBLISHED', true ); ?> Publicado
            </label>
            <label>
                <?php echo Form::radio('status', 'DRAFT' ); ?> Rascunho
            </label>
        </div>



    <hr>

    <div class="form-group" align="right">
        <?php echo e(Form::submit('Gravar as auterações', ['class' => 'btn btn-sm btn-primary'])); ?>

    </div>

    <br>

</div>

<?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/posts/partials/form.blade.php ENDPATH**/ ?>
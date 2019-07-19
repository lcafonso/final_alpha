<?php $__env->startSection('headInclude'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/OpenLayers/ol.css')); ?>" type="text/css">
    <style>
        .map {
            height: 400px;
            width: 100%;
        }
    </style>
    <script src="<?php echo e(asset('vendor/OpenLayers/ol.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver Localidade</h1>

                </div>

                <div>
                    <p><strong>Distrito:</strong> <?php echo e($place->district_id); ?></p>
                    <p><strong>Concelho:</strong> <?php echo e($place->county_id); ?></p>
                    <p><strong>Codigo:</strong> <?php echo e($place->place_id); ?></p>
                    <p><strong>Localidade:</strong> <?php echo e($place->name); ?></p>
                    <p><strong>Codigo Postal:</strong> <?php echo e($place->CP4); ?> -  <?php echo e($place->CP3); ?>  <?php echo e($place->CPALF); ?></p>
                    <p><strong>Latitude:</strong> <?php echo e($place->latitude); ?></p>
                    <p><strong>Logitude:</strong> <?php echo e($place->longitude); ?></p>


                </div>

                <div id="map" class="map"></div>

            </div><!-- /.blog-main -->

        </div>

    </div>


    <script type="text/javascript">
        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([ <?php echo $place->latitude; ?> , <?php echo $place->longitude; ?>]),
                zoom: 15
            })
        });

        //Adding a marker on the map

        var marker = new ol.Feature({
            geometry: new ol.geom.Point(
                ol.proj.fromLonLat([ <?php echo $place->latitude; ?> , <?php echo $place->longitude; ?>])
            ),
        });
        var vectorSource = new ol.source.Vector({
            features: [marker]
        });
        var markerVectorLayer = new ol.layer.Vector({
            source: vectorSource,
        });
        map.addLayer(markerVectorLayer);

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/places/show.blade.php ENDPATH**/ ?>
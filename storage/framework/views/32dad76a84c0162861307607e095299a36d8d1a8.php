<?php $__env->startSection('head'); ?>
    

    <script type="text/javascript" src="<?php echo e(asset('vendor/unitegallery/dist/js/unitegallery.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/unitegallery/dist/css/unite-gallery.css')); ?>">

    <script type="text/javascript" src="<?php echo e(asset('vendor/unitegallery/dist/themes/tiles/ug-theme-tiles.js')); ?>"></script>
    <style>
        body{
            background: -webkit-linear-gradient(left, #33775f, #fff);
        }



    </style>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



    <!-- Page Content -->
    <div id="gallery" style="display:none;">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img alt="Preview Image 1"
             src="<?php echo e(asset($post->file)); ?>"
             data-image="<?php echo e(asset($post->file)); ?>"
             data-description="Preview Image 1 Description">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Pagination -->
        <div>
            <?php echo e($posts->render()); ?>

        </div>

    </div>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    
    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#gallery").unitegallery({
                gallery_theme: "tiles",
                tiles_type: "justified"
            });
        });

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/web/gallery.blade.php ENDPATH**/ ?>
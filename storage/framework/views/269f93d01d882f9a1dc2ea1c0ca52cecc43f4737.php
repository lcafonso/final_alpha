<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>

        
        <?php echo $__env->make('layouts.partials.head' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Styles -->
        <?php echo $__env->yieldContent('head'); ?>

    </head>
    <body data-spy="scroll" data-target="#navbarSupportedContent">

        <div id="app">

            
            <?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            
            <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




            
            <?php if(session('info')): ?>
                <div class="container">
                    <div class="row">
                        <div class="alert alert-success alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> <?php echo e(session('info')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(count($errors)): ?>
                <div class="container">
                    <div class="row">
                        <div class="alert alert-warning alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                    </div>
                </div>
            <?php endif; ?>

            
            <main>
                <?php echo $__env->yieldContent('content'); ?>
            </main>

        </div>

        
        <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->make('layouts.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->yieldContent('footer'); ?>

    </body>
</html>
<?php /**PATH /var/www/digitalandscape.esa.ipb.pt/resources/views/layouts/main.blade.php ENDPATH**/ ?>
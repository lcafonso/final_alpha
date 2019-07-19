<html>
<head>
    <style>
        /**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
        @page  {
            margin: 0cm 0cm;
        }


        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 3cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
        }

        .page-break {
            page-break-after: always;
        }

    </style>
</head>

<body>
<!-- Define header and footer blocks before your content -->
<header>
    <img src="<?php echo e(asset('img/folhaHeader.png')); ?>" width="100%" height="100%"/>
</header>

<footer>
    <img src="<?php echo e(asset('img/folhaFooter.png')); ?>" width="100%" height="100%"/>
</footer>

<!-- Wrap the content of your PDF inside a main tag -->
<main>
    <br>
    <div>
        <img src="<?php echo e($post->file); ?>"  style="width: 100%;" alt="">
    </div>
    <h3><?php echo e($post->name); ?></h3>
    <div>
        <h4>Discritivo</h4>
        <hr>
        <p>
            <?php echo $post->body; ?>

        </p>
    </div>

    <div class="page-break"></div>

    <div>

        <h4>Detalhes</h4>
        <hr>
        <ul>
            <li>
                <div style="padding: 5px 5px 5px 5px; border-style: solid; border-width: .5px;">
                    <img src="<?php echo e(asset('img/camera-retro.svg')); ?>" style="max-height: 20px" alt="">
                    <?php echo e($post->detail->equipment); ?>

                </div>

            </li>
            <li>
                <div style="padding: 5px 5px 5px 5px; border-style: solid; border-width: .5px;">
                    <img src="<?php echo e(asset('img/resize-tool.svg')); ?>" style="max-height: 20px" alt="">
                    <?php echo e($post->detail->dimensionY); ?> x <?php echo e($post->detail->dimensionX); ?>

                </div>
            </li>
            <li>
                <div style="padding: 5px 5px 5px 5px; border-style: solid; border-width: .5px;">
                    <img src="<?php echo e(asset('img/resolution.svg')); ?>" style="max-height: 20px" alt="">
                    <?php echo e($post->detail->resolution); ?>

                </div>
            </li>
            <li>
                <div style="padding: 5px 5px 5px 5px; border-style: solid; border-width: .5px;">
                    <img src="<?php echo e(asset('img/svg-shutter-icon-2.svg')); ?>" style="max-height: 20px" alt="">
                    <?php echo e($post->detail->aperture); ?>

                </div>
            </li>
            <li>
                <div style="padding: 5px 5px 5px 5px; border-style: solid; border-width: .5px;">
                    <img src="<?php echo e(asset('img/brightness.svg')); ?>" style="max-height: 20px" alt="">
                    <?php echo e($post->detail->exposure); ?>

                </div>
            </li>
            <li>
                <div style="padding: 5px 5px 5px 5px; border-style: solid; border-width: .5px;">
                <img src="<?php echo e(asset('img/iso-file-format.svg')); ?>" style="max-height: 20px" alt="" >
                <?php echo e($post->detail->iso); ?>

                </div>
            </li>
            <li>
                <div style="padding: 5px 5px 5px 5px; border-style: solid; border-width: .5px;">
                    <img src="<?php echo e(asset('img/world-location.svg')); ?>" style="max-height: 20px" alt="">
                    <?php echo e($post->detail->latitude); ?> ;  <?php echo e($post->detail->longitude); ?>

                </div>
            </li>
            <li>
                <div style="padding: 5px 5px 5px 5px; border-style: solid; border-width: .5px;">
                    <img src="<?php echo e(asset('img/chip.svg')); ?>" style="max-height: 20px" alt="">
                    <?php echo e($post->detail->technologie->name); ?>

                </div>
            </li>
        </ul>

        <h4>Anotações</h4>
        <hr>


    </div>
</main>

</body>
</html>
<?php /**PATH D:\laragon\www\final_alpha\resources\views/myPDF.blade.php ENDPATH**/ ?>
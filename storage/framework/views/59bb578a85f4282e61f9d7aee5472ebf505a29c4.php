<?php $__env->startSection('head'); ?>
    
    <script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>" ></script>

    <script src="<?php echo e(asset('vendor/OpenLayers/ol.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('vendor/OpenLayers/ol.css')); ?>">

    <style class="cp-pen-styles">


        body {
            background: -webkit-linear-gradient(left, #9bbca5, #fff);
        }

        #map {
            width: auto;
            height: 500px;
        }

        /* enable absolute positioning */
        .inner-addon {
            position: relative;
        }

        /* style icon */
        .inner-addon .glyphicon {
            position: absolute;
            padding: 10px;
            pointer-events: none;
        }

        /* align icon */
        .left-addon .glyphicon  { left:  0px;}
        .right-addon .glyphicon { right: 0px;}

        /* add padding  */
        .left-addon input  { padding-left:  30px; }
        .right-addon input { padding-right: 30px; }

    </style>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    

    <div class="container">




        <?php echo Form::model($post, ['route' => ['adminposts.update', $post->id],
        'method' => 'PUT', 'files'=>true]); ?>

        <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('admin.posts.partials.form', ['metodo' => 'edit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>




    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

    


    <script type="text/javascript">



        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                })
            ],

            view: new ol.View({
                center: ol.proj.fromLonLat([-8.840978,39.7540562]),
                zoom: 7
            })
        });


        $(document).ready(function(){
            $("#name, #slug").keyup(function(){
                var value = string_to_slug($( this ).val());
                $( "#slug" ).val( value );

            });

            <!-- Replace the <textarea id="body> with a CKEditor -->
            <!-- instance, using default configuration. -->
            CKEDITOR.config.height = 400;
            CKEDITOR.config.width = 'auto';
            CKEDITOR.replace( 'body' );




            $("#file").on('change', function() {
                //Get count of selected files
                var countFiles = $(this)[0].files.length;
                var imgPath = $(this)[0].value;
                var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                var image_holder = $("#image-holder");
                image_holder.empty();
                if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                    if (typeof(FileReader) != "undefined") {
                        //loop for each file selected for uploaded.
                        for (var i = 0; i < countFiles; i++)
                        {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $("<img />", {
                                    "src": e.target.result,
                                    "class": "thumb-image",
                                    "style" : "height: 100%; width: 100%; object-fit: contain"
                                }).appendTo(image_holder);
                            }
                            image_holder.show();
                            reader.readAsDataURL($(this)[0].files[i]);
                        }
                    } else {
                        alert("This browser does not support FileReader.");
                    }
                } else {
                    alert("Pls select only images");
                }
            });
        });

        $('#district').change(function(){
            var districtID = $(this).val();
            if(districtID){
                $.ajax({
                    type:"GET",
                    url:"<?php echo e(url('get-state-list')); ?>?district_id="+districtID,
                    success:function(res){
                        if(res){
                            $("#county").empty();
                            $("#county").append('<option>Selecione o Concelho</option>');

                            $("#place").empty();
                            $("#place").append('<option>Selecione a localidade</option>');


                            $.each(res,function(key,value){
                                $("#county").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#county").empty();
                        }
                    }
                });
            }else{
                $("#county").empty();
                $("#place").empty();
            }
        });

        $('#county').on('change',function(){
            var countyID = $(this).val();
            var districtID = $("#district").val();
            if(countyID){
                $.ajax({
                    type:"GET",
                    url:"<?php echo e(url('get-city-list')); ?>?county_id="+countyID+"&district_id="+districtID,
                    success:function(res){
                        if(res){
                            $("#place").empty();
                            $("#place").append('<option>Selecione a localidade</option>');
                            $.each(res,function(key,value){
                                $("#place").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#place").empty();
                        }
                    }
                });
            }else{
                $("#place").empty();
            }

        });




        var successFunction = function(res){
            //console.log(res);
            $.each(res,function(index,placeOBJ){
                //console.log(placeOBJ);
                //document.getElementById("result").innerHTML =placeOBJ['id'];

                // create a layer with the OSM source
                var layer = new ol.layer.Tile({
                    source: new ol.source.OSM()
                });

                // create an interaction to add to the map that isn't there by default
                var interaction = new ol.interaction.DragRotateAndZoom();

                // create a control to add to the map that isn't there by default
                var control = new ol.control.FullScreen();

                // center on london, transforming to map projection
                var center = ol.proj.fromLonLat([placeOBJ['latitude'],placeOBJ['longitude']]);

                // an overlay to position at the center
                var overlay = new ol.Overlay({
                    position: center,
                    element: document.getElementById('overlay')
                });

                $('#map').html('');

                // view, starting at the center
                var view = new ol.View({
                    center: center,
                    zoom: 8
                });

                // finally, the map with our custom interactions, controls and overlays
                var map = new ol.Map({
                    target: 'map',
                    layers: [layer],
                    interactions: [interaction],
                    controls: [control],
                    overlays: [overlay],
                    view: view
                });

            });


        };


        $('#place').on('change',function(){

            var placeID = $(this).val();
            if(placeID){
                $.ajax({
                    type:"GET",
                    url:"<?php echo e(url('get-place')); ?>?place_id="+placeID,
                    success:successFunction
                });
            }
        });

    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>
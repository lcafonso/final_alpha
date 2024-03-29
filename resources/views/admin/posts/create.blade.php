@extends('admin.admin')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}
    <script src="{{asset('vendor/ckeditor/ckeditor.js')}}" ></script>

    <script src="{{asset('vendor/OpenLayers/ol.js')}}"></script>



    <link rel="stylesheet" href="{{asset('vendor/OpenLayers/ol.css')}}">

    <style class="cp-pen-styles">


        body {
            background: -webkit-linear-gradient(left, #bcbcbc, #fff);
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





@endsection

{{--Section footer--}}
@section('content')
    {{-- conteiner body --}}

    <div class="container">




    {!! Form::open(['route' => 'adminposts.store', 'files' => true]) !!}
        {{ csrf_field() }}
        @include('admin.posts.partials.form', ['metodo' => 'create'])
    {!! Form::close() !!}



    </div>


@endsection

{{--Section footer--}}
@section('footer')

        {{-- Another scripts and styles in footer --}}

        <script type="text/javascript" src="{{asset('js/exif.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>


        <script type="text/javascript">
            /* Inicializa mapa */
            var map;
            var mapLat = -7.840978;
            var mapLng = 39.5540562;
            var mapDefaultZoom = 6.7;

            function initialize_map(lat, lng) {

                map = new ol.Map({
                    target: "map",
                    layers: [
                        new ol.layer.Tile({
                            source: new ol.source.OSM()
                        })
                    ],
                    view: new ol.View({
                        center: ol.proj.fromLonLat([lng, lat]),
                        zoom: mapDefaultZoom
                    })
                });
            }

            /* Funçoes auxiliares*/
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })

            function setText(id,newvalue) {
                document.getElementById(id).value = newvalue;

            };
            function add_map_point(lat, lng) {
                var vectorLayer = new ol.layer.Vector({
                    source:new ol.source.Vector({
                        features: [new ol.Feature({
                            geometry: new ol.geom.Point(ol.proj.transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
                        })]
                    }),
                    style: new ol.style.Style({
                        image: new ol.style.Icon({
                            anchor: [0.5, 0.5],
                            anchorXUnits: "fraction",
                            anchorYUnits: "fraction",
                            src: "{{asset('img/reddot.svg')}}"
                        })
                    })
                });
                map.addLayer(vectorLayer);
            }


            $(document).ready(function(){


                initialize_map(mapLng, mapLat);

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

                    /* Informação sobre a imagem*/



                });

            });

            $('#district').change(function(){
                var districtID = $(this).val();
                if(districtID){
                    $.ajax({
                        type:"GET",
                        url:"{{url('get-state-list')}}?district_id="+districtID,
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
                        url:"{{url('get-city-list')}}?county_id="+countyID+"&district_id="+districtID,
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




            $('#place').on('change',function(){

                var placeID = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "{{url('get-place')}}?place_id="+placeID,
                    success: function(res){
                        $.each(res,function(index,placeOBJ){
                            //console.log(placeOBJ);
                            //document.getElementById("result").innerHTML =placeOBJ['id'];

                            add_map_point(placeOBJ['longitude'],  placeOBJ['latitude']);
                            setText("imgLong",placeOBJ['longitude']);
                            setText("imgLat", placeOBJ['latitude']);
                        });
                    }
                });


            });

            /* Chamada para informações da imagem*/
            $(function() {
                var someCallback = function(exifObject) {
                    $('#cameraModel').val(exifObject.Model);
                    $('#aperture').val('f/'+exifObject.FNumber);
                    $('#exposureTime').val(exifObject.ExposureTime + ' seg.');
                    $('#version').val(exifObject.ExifVersion);
                    $('#flash').val(exifObject.Flash);
                    $('#focalDistance').val(exifObject.FocalLength + 'mm');
                    $('#ISO').val(exifObject.ISOSpeedRatings);
                    $('#pdX').val(exifObject.PixelXDimension);
                    $('#pdY').val(exifObject.PixelYDimension);
                    // Uncomment the line below to examine the
                    // EXIF object in console to read other values
                    //console.log(exifObject);
                }
                try {
                    $('#file').change(function() {
                        $(this).fileExif(someCallback);
                    });
                } catch (e) {
                    alert(e);
                }
            });

        </script>

@endsection


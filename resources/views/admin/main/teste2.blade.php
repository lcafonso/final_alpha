@extends('admin.normal')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}
    <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>


    <style>


        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            overflow: hidden;
            margin: 0;
            background: -webkit-linear-gradient(left, #6267a9, #fff);
        }



        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -25rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .conteudo {
            width: 25rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper{
            margin-left: 0px;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -25rem;
            }
        }

    </style>

    <style>
        /*
Reset CSS
*/


        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }


        /*
         * Page Styles
         */

        body {
            font-family: 'PT Sans', sans-serif;
        }

        .wrapper {
            margin: 2.5% auto;
            max-width: 960px;
            min-width: 960px;
            padding: 10px;
        }

        h1 {
            text-align: center;
            font-size: 4em;
        }

        form {
            text-align: center;
        }

        /* Styles for  URL box */

        .url-box {
            display: inline-block;
            margin: 4% auto 2%;
            text-align: center;
            width: 100%;
            height: 3.5rem;
            font-size: 2rem;
            font-weight: 100;
            outline: none;
            border: 2px solid #000;
            box-sizing: border-box;
        }

        .url-box::-webkit-input-placeholder {
            color: #000;
            opacity: 0.5;
            font-size: 1.5rem;
            font-weight: 100;
            padding-top: 5px;
        }

        .url-box::-moz-placeholder {
            color: #000;
            opacity: 0.5;
            font-size: 0.7em;
            font-weight: 100;
            padding-top: 5px;
        }

        /* Styles for image container*/

        #imageContainer {
            border: 2px solid #8c8c8c;
            display: inline-block;
            padding: 5px;
            vertical-align: top;
            margin-left: 1%;
            width:99%;
        }

        #imageContainer img {
            width: 100%;
        }

        /* Styles for sliders*/

        .sliders {
            width: 100%;
            display: inline-block;
            border: 2px solid #8c8c8c;
            padding-left: 10px;
        }

        .sliders p {
            margin: 18px 0;
            vertical-align: middle;

        }

        .sliders label {
            display: inline-block;
            margin: 10px 0 0 0;
            width: 100px;
            font-size: 1.1rem;
            color: #22313F;
            text-align: left;
            vertical-align: middle;
        }

        .sliders input {
            position: relative;
            margin: 10px 20px 0 10px;
            vertical-align: middle;
        }

        input[type=range] {
            /*removes default webkit styles*/
            -webkit-appearance: none;

            /*fix for FF unable to apply focus style bug */
            border-radius: 5px;

            /*required for proper track sizing in FF*/
            width: 150px;
        }

        input[type=range]::-webkit-slider-runnable-track {
            width: 300px;
            height: 7px;
            background: #8c8c8c;
            border: none;
            border-radius: 3px;
        }
        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            border: none;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #4B77BE;
            margin-top: -6px;
            vertical-align: middle;
        }
        input[type=range]:focus {
            outline: none;
        }

        input[type=range]:hover {
            cursor: pointer;
        }


        #reset {
            display: inline-block;
            height: 2.5rem;
            width: 95%;
            background-color: #22A7F0;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            font-size: 1.5rem;
            color: #fff;
            margin: 0 10px 10px 0px;
            border: 2px solid transparent;
        }

        #reset:hover {
            color: #22A7F0;
            background-color: #fff;
            border: 2px solid #22A7F0;
        }
    </style>



@endsection

{{--Section footer--}}
@section('content')



        {{-- --}}



        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <h3>Detalhes</h3>
                </div>
                <div class="conteudo">

                    @include('admin.main.partials.cardUser', ['user' => $user])

                </div>

                @include('admin.main.partials.cardMap', ['post' => $post])




            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button class="btn btn-primary" id="menu-toggle">
                    <span><i class="fa fa-bars"></i></span>
                </button>




                <div id="imageContainer" class="container-fluid">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        @include('admin.main.partials.cardFilter')
                    </div>
                    <img src="{{$post->file}}" style="height: 100%; width: 100%; object-fit: contain" alt="" >
                    <span style="font-size:30px;cursor:pointer; position: fixed; right: 5px" onclick="openNav()"><i class="fas fa-cog"></i></span>
                </div>


            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->















@endsection



{{--Section footer--}}
@section('footer')

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script>

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(document).ready(function() // or $(function()
        {
            initialize_map();
            add_map_point(41.80582,  -6.75719);
        });

    </script>

    <script>
        /* OSM & OL example code provided by https://mediarealm.com.au/ */
        var map;
        var mapLat = 41.80582;
        var mapLng = -6.75719;
        var mapDefaultZoom = 12;

        function initialize_map() {
            map = new ol.Map({
                target: "map",
                layers: [
                    new ol.layer.Tile({
                        source: new ol.source.OSM({
                            url: "https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"
                        })
                    })
                ],
                view: new ol.View({
                    center: ol.proj.fromLonLat([mapLng, mapLat]),
                    zoom: mapDefaultZoom
                })
            });
        }
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
    </script>


    <script>
        // adding an image via url box
        function addImage(e) {
            var imgUrl = $("#imgUrl").val();
            if (imgUrl.length) {
                $("#imageContainer img").attr("src", imgUrl);
            }
            e.preventDefault();
        }

        //on pressing return, addImage() will be called
        $("#urlBox").submit(addImage);


        // editing image via css properties
        function editImage() {

            var gs 		 = $("#gs").val();      // grayscale
            var blur 	 = $("#blur").val();    // blur
            var br 		 = $("#br").val();      // brightness
            var ct 		 = $("#ct").val();      // contrast
            var huer	 = $("#huer").val();    //hue-rotate
            var opacity      = $("#opacity").val(); //opacity
            var invert 	 = $("#invert").val();  //invert
            var saturate     = $("#saturate").val();//saturate
            var sepia 	 = $("#sepia").val();   //sepia

            var filter = 	'grayscale(' + gs+
                '%) blur(' + blur +
                'px) brightness(' + br +
                '%) contrast(' + ct +
                '%) hue-rotate(' + huer +
                'deg) opacity(' + opacity +
                '%) invert(' + invert +
                '%) saturate(' + saturate +
                '%) sepia(' + sepia + '%)';

            $("#imageContainer img").css("filter", filter);
            $("#imageContainer img").css("-webkit-filter", filter);

        }

        //When sliders change image will be updated via editImage() function
        $("input[type=range]").change(editImage).mousemove(editImage);

        // Reset sliders back to their original values on press of 'reset'
        $('#imageEditor').on('reset', function () {
            setTimeout(function() {
                editImage();
            },0);
        });
    </script>
@endsection



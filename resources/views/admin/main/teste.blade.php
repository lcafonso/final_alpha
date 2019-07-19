@extends('admin.admin')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}


    <script src="{{asset('vendor/amcharts4/core.js')}}"></script>
    <script src="{{asset('vendor/amcharts4/charts.js')}}"></script>
    <script src="{{asset('vendor/amcharts4/themes/material.js')}}"></script>
    <script src="{{asset('vendor/amcharts4/lang/pt_PT.js')}}"></script>
    <script src="{{asset('vendor/amcharts4/geodata/portugalHigh.js')}}"></script>


    <script src="{{asset('vendor/OpenLayers/ol.js')}}"></script>

    <link rel="stylesheet" href="{{asset('vendor/OpenLayers/ol.css')}}">

    <style class="cp-pen-styles">


        body {
            background: -webkit-linear-gradient(left, #6267a9, #fff);
        }

        #map {
            width: 400px;
            height: 250px;
        }

    </style>

@endsection

{{--Section footer--}}
@section('content')


    {{-- conteiner body --}}
    <div class="container mt-3">

        <div class="panel panel-default">
            <div class="panel-heading"><strong>Localização</strong></div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('district', 'Selecione o Distrito') !!}
                            {!! Form::select(
                                'district',
                                $districts,
                                null,
                                ['class' => 'form-control','id'=>'district', 'name'=>'district']
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('district', 'Selecione o Concelho') !!}
                            {!! Form::select(
                                'county',
                                ['0'=>'Selecione o Concelho'],
                                null,
                                ['class' => 'form-control','id'=>'county', 'name'=>'county']
                                )
                            !!}
                        </div>

                        <div class="form-group" >
                            {!! Form::label('place', 'Selecione a localidade') !!}
                            {!! Form::select(
                                'place',
                                ['0'=>'Selecione a localidade'],
                                null,
                                ['class' => 'form-control','id'=>'place', 'name'=>'place']
                                )
                            !!}
                        </div>

                    </div>
                    <dic class="col-md-6">

                    </dic>
                </div>





            </div>
        </div>


        <div id="map" class="map"></div>
        <div id="overlay" style="background-color: red; width: 20px; height: 20px; border-radius: 10px;"></div>

    </div>


@endsection

{{--Section footer--}}
@section('footer')

    <script type="text/javascript">


        var placeOBJ = '';




        $(document).ready(function() {


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




        var successFunction = function(res){
            //console.log(res);
            $.each(res,function(index,placeOBJ){
                //console.log(placeOBJ);
                document.getElementById("result").innerHTML =placeOBJ['id'];

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
                    zoom: 10
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
                    url:"{{url('get-place')}}?place_id="+placeID,
                    success:successFunction
                });
            }
        });


/*

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
*/
        function distance(lat1, lon1, lat2, lon2, unit) {
            var radlat1 = Math.PI * lat1/180
            var radlat2 = Math.PI * lat2/180
            var theta = lon1-lon2
            var radtheta = Math.PI * theta/180
            var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
            if (dist > 1) {
                dist = 1;
            }
            dist = Math.acos(dist)
            dist = dist * 180/Math.PI
            dist = dist * 60 * 1.1515
            if (unit=="K") { dist = dist * 1.609344 }
            if (unit=="N") { dist = dist * 0.8684 }
            return dist
        }

        var distance = distance(41.795909, -6.766955, 41.7957093, -6.7705597, 'K');
        //round to 3 decimal places
        console.log(distance*1000);  //displays 343.548

    </script>




@endsection



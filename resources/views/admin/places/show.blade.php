@extends('admin.admin')

@section('headInclude')
    <link rel="stylesheet" href="{{asset('vendor/OpenLayers/ol.css')}}" type="text/css">
    <style>
        .map {
            height: 400px;
            width: 100%;
        }
    </style>
    <script src="{{asset('vendor/OpenLayers/ol.js')}}"></script>
@stop

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver Localidade</h1>

                </div>

                <div>
                    <p><strong>Distrito:</strong> {{$place->district_id }}</p>
                    <p><strong>Concelho:</strong> {{$place->county_id }}</p>
                    <p><strong>Codigo:</strong> {{$place->place_id }}</p>
                    <p><strong>Localidade:</strong> {{$place->name }}</p>
                    <p><strong>Codigo Postal:</strong> {{$place->CP4}} -  {{$place->CP3}}  {{$place->CPALF}}</p>
                    <p><strong>Latitude:</strong> {{$place->latitude }}</p>
                    <p><strong>Logitude:</strong> {{$place->longitude }}</p>


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
                center: ol.proj.fromLonLat([ {!! $place->latitude !!} , {!! $place->longitude !!}]),
                zoom: 15
            })
        });

        //Adding a marker on the map

        var marker = new ol.Feature({
            geometry: new ol.geom.Point(
                ol.proj.fromLonLat([ {!! $place->latitude !!} , {!! $place->longitude !!}])
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

@endsection
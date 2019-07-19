@extends('admin.admin')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver Concelho</h1>

                </div>

                <div>
                    <p><strong>Distrito:</strong> {{$county->district_id }}</p>
                    <p><strong>Codigo:</strong> {{$county->county_id }}</p>
                    <p><strong>Nome:</strong> {{$county->name }}</p>
                </div>
                <div id="map"></div>
                <div id="popup" style="display: none"></div>
            </div>

        </div>



    </div>

    <script type="text/javascript" src="{{asset('vendor/raphael/js/raphael.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/raphael/js/concelhosSVG.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/raphael/js/concelhosIRS.js')}}"></script>
    <script type="text/javascript">

        var style = {
            fill: "#ddd",
            stroke: "#aaa",
            "stroke-width": 1,
            "stroke-linejoin": "round",
            cursor: "pointer"
        };

        // Style when hovering
        var hoverStyle = {
            fill: "#A8BED5"
        }

        // Styles for tax brackets
        var fivePercent = {
            fill: "#820007"
        }


        var animationSpeed = 500;

        var nome = "{!! $county->name  !!}"
        concelhosIRS[nome] = 1;


        function corConcelho(nome) {
            if (concelhosIRS[nome] == 1) {
                return fivePercent;
            } else {
                return style;
            }
        }

        for (var concelhoName in concelhosSVG) {
            (function(concelho, nome) {
                concelho.attr(style);
                concelho.attr(corConcelho(nome));

                concelho[0].addEventListener("mouseover", function() {
                    concelho.animate(hoverStyle, animationSpeed);
                    document.getElementById('popup').style.display = 'block';
                    document.getElementById('popup').innerHTML = nome;

                }, true);

                concelho[0].addEventListener("mouseout", function() {
                    concelho.animate(corConcelho(nome), animationSpeed);
                    document.getElementById('popup').style.display = 'none';
                    document.getElementById('popup').innerHTML = null;
                }, true);

            })(concelhosSVG[concelhoName], concelhoName);
        }

    </script>

@endsection
@extends('admin.admin')

@section('content')



    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver Distrito</h1>

                </div>

                <div>
                    <p><strong>Distrito:</strong> {{$district->district_id }}</p>
                    <p><strong>Nome:</strong> {{$district->name }}</p>
                </div>

                <div>
                    <object id="svgObject"  data="{{asset('img/portugal.svg')}}" type="image/svg+xml">
                        Your browser doesn't support SVG
                    </object>
                </div>

            </div><!-- /.blog-main -->

        </div>

    </div>

    <script>




        window.onload=function() {



            // Get the Object by ID
            var a = document.getElementById("svgObject");

            // Get the SVG document inside the Object tag
            var svgDoc = a.contentDocument;

            // Get one of the SVG items by ID;
            var n = {!! $district->district_id !!};
            var formattedNumber = n > 9 ? "" + n: "0" + n;

            var svgItem = svgDoc.getElementById("PT-"+formattedNumber);

            // Set the colour to something else
            svgItem.setAttribute("fill", "#f5770f");


        };


    </script>

@endsection



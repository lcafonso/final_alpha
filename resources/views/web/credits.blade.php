
@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <style>

        body{
            background: -webkit-linear-gradient(left, #bcbcbc, #fff);
        }

    </style>


@endsection

{{--Section footer--}}
@section('content')

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Juxtapose</h2>
                <p>Juxtapose helps storytellers compare two pieces of similar media, including photos, and GIFs.</p>
                <p><a class="btn btn-secondary" href="https://juxtapose.knightlab.com" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>CKEditor</h2>
                <p>CKEditor is a trademark of CKSource - Frederico Knabben. All other brand
                    and product names are trademarks, registered trademarks or service
                    marks of their respective holders.
                </p>
                <p><a class="btn btn-secondary" href="https://ckeditor.com/" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>PhotoSwipe</h2>
                <p>JavaScript image gallery for mobile and desktop.</p>
                <p><a class="btn btn-secondary" href="https://photoswipe.com/" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>


    </div> <!-- /container -->


@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}


@endsection









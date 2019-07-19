@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <script type="text/javascript" src="{{asset('vendor/unitegallery/dist/js/unitegallery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('vendor/unitegallery/dist/css/unite-gallery.css')}}">

    <script type="text/javascript" src="{{asset('vendor/unitegallery/dist/themes/tiles/ug-theme-tiles.js')}}"></script>
    <style>
        body{
            background: -webkit-linear-gradient(left, #33775f, #fff);
        }



    </style>


@endsection

{{--Section footer--}}

@section('content')



    <!-- Page Content -->
    <div id="gallery" style="display:none;">

        @foreach ($posts as $post)
        <img alt="Preview Image 1"
             src="{{ asset($post->file)  }}"
             data-image="{{ asset($post->file) }}"
             data-description="Preview Image 1 Description">
        @endforeach
        <!-- Pagination -->
        <div>
            {{ $posts->render() }}
        </div>

    </div>





@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}
    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#gallery").unitegallery({
                gallery_theme: "tiles",
                tiles_type: "justified"
            });
        });

    </script>

@endsection
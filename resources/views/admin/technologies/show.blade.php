@extends('admin.admin')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver tecnologia</h1>

                </div>

                <div>
                    <p><strong>Nome:</strong> {{$technologie->name }}</p>
                    <p><strong>Slug:</strong> {{$technologie->slug }}</p>
                </div>

            </div><!-- /.blog-main -->

        </div>

    </div>
@endsection

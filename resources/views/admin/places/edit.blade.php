@extends('admin.admin')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-8 offset-md-2 blog-main">

            <div class="card">
                <div class="card-header">
                    Editar Localidade
                </div>
                <div class="card-body">

                    {!! Form::model($place, ['route' => ['adminplaces.update', $place->id], 'method' => 'PUT']) !!}

                        @include('admin.places.partials.form')

                    {!! Form::close() !!}

                </div>
            </div>



        </div><!-- /.blog-main -->

    </div>

</div>


@endsection


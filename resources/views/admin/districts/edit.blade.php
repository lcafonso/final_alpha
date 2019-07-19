@extends('admin.addmin')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-md-8 offset-md-2 blog-main">

            <div class="card">
                <div class="card-header">
                    Editar Distrito
                </div>
                <div class="card-body">

                    {!! Form::model($district, ['route' => ['admindistricts.update', $district->id], 'method' => 'PUT']) !!}

                        @include('admin.districts.partials.form')

                    {!! Form::close() !!}

                </div>
            </div>



        </div><!-- /.blog-main -->

    </div>

</div>


@endsection


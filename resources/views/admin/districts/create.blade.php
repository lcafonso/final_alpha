@extends('admin.admin')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">

                <div class="card">
                    <div class="card-header">
                        Criar Distrito
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => 'admindistricts.store']) !!}

                            @include('admin.districts.partials.form')

                        {!! Form::close() !!}


                    </div>
                </div>



            </div><!-- /.blog-main -->

        </div>

    </div>

@endsection



@extends('admin.admin')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">

                <div class="card">
                    <div class="card-header">
                        Criar tecnologia
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => 'admintechnologies.store']) !!}

                            @include('admin.technologies.partials.form')

                        {!! Form::close() !!}


                    </div>
                </div>



            </div><!-- /.blog-main -->

        </div>

    </div>

@endsection



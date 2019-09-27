@extends('layouts.extra')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}


    <style>


        body {
            background: -webkit-linear-gradient(left, #a99958, #fff);
        }



    </style>

@endsection

{{--Section footer--}}
@section('content')


    {{-- conteiner body --}}
    <div class="container">
        <h4>Numero de registros: {{ $base->count() }}</h4>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>user</th>
                <th>localidade</th>
                <th>teste</th>
            </tr>
            </thead>
            <tbody>
            @foreach($base as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->user_id }}</td>
                    <td>//</td>
                    <td>  / </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


{{--Section footer--}}
@section('footer')



@endsection



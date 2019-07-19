@extends('admin.admin')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 offset-md-2 blog-main">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Lista de tecnologias</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="{{route('admintechnologies.create')}}" class="btn btn-sm btn-outline-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        Novo registo
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Operações</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($technologies as $technologie)
                    <tr>
                        <td>{{ $technologie->id }}</td>
                        <td>{{ $technologie->name }}</td>
                        <td  width="10%" align="right">
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <a href="{{ route('admintechnologies.show', $technologie->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                    <a href="{{ route('admintechnologies.edit', $technologie->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>

                                    {!! Form::open(['route' => ['admintechnologies.destroy', $technologie->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-outline-danger"> Eliminar </button>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>



            <nav class="blog-pagination">
                {{ $technologies->render() }}
            </nav>

        </div><!-- /.blog-main -->

    </div>

</div>
@endsection

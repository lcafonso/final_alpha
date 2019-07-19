<div class="form-group">
    {!! Form::label('name', 'Nome da Localidade') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name' ]) !!}
</div>


<div class="form-group">
    {{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')



@endsection
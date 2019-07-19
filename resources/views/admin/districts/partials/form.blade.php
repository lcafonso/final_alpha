
<div class="form-group">
    {!! Form::label('district_id', 'Codigo do Distrito') !!}
    {!! Form::text('district_id', null, ['class' => 'form-control', 'id' => 'district_id' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Nome do distrito') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name' ]) !!}
</div>


<div class="form-group">
    {{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
</div>



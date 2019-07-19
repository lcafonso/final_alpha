
<div class="form-group">
    {!! Form::label('district_id', 'Codigo') !!}
    {!! Form::text('district_id', null, ['class' => 'form-control', 'id' => 'district_id' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('county_id', 'Codigo') !!}
    {!! Form::text('county_id', null, ['class' => 'form-control', 'id' => 'county_id' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Nome da etiqueta') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name' ]) !!}
</div>


<div class="form-group">
    {{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


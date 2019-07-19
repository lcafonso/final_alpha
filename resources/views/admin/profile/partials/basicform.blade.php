<div class="container mt-2">

    <div class="form-group ">
        {!! Form::label('email', 'Identificação') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'name' => 'email']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'name' => 'name']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('profileName', 'Nome') !!}
        {!! Form::text('profileName', null, ['class' => 'form-control', 'id' => 'profileName', 'name' => 'profileName']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('profileSurname', 'Sobrenome') !!}
        {!! Form::text('profileSurname', null, ['class' => 'form-control', 'id' => 'profileSurname', 'name' => 'profileSurname']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('profilePhone', 'Telefone') !!}
        {!! Form::text('profilePhone', null, ['class' => 'form-control', 'id' => 'profilePhone', 'name' => 'profilePhone']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('profileGenre', 'Sexo') !!}
        {!! Form::text('profileGenre', null, ['class' => 'form-control', 'id' => 'profileGenre', 'name' => 'profileGenre']) !!}
    </div>

</div>


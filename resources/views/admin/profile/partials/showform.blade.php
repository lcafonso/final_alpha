




<div class="container mt-2">

    <div class="form-group ">
        {!! Form::label('email', 'Identificação') !!}
        {!! Form::Label('email',$user->email, ['class' => 'form-control', 'id' => 'email', 'name' => 'email']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('name', 'Nome Completo') !!}
        {!! Form::label('name', $user->name, ['class' => 'form-control', 'id' => 'name', 'name' => 'name']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('profileName', 'Primeiro Nome') !!}
        {!! Form::label('profileName', $user->profile->name, ['class' => 'form-control', 'id' => 'profileName', 'name' => 'profileName']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('profileSurname', 'Sobrenome') !!}
        {!! Form::label('profileSurname', $user->profile->surname, ['class' => 'form-control', 'id' => 'profileSurname', 'name' => 'profileSurname']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('profilePhone', 'Telefone') !!}
        {!! Form::label('profilePhone', $user->profile->phone, ['class' => 'form-control', 'id' => 'profilePhone', 'name' => 'profilePhone']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('profileGenre', 'Sexo') !!}
        {!! Form::label('profileGenre', $user->profile->genre, ['class' => 'form-control', 'id' => 'profileGenre', 'name' => 'profileGenre']) !!}
    </div>

</div>


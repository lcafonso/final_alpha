
<div class="form-group ">
    {!! Form::label('name', 'Nome completo') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'name' => 'name']) !!}
</div>

<div class="form-group ">
    {!! Form::label('body', 'Um resumo') !!}
    {!! Form::textarea('body', $user->profile->body, ['class' => 'form-control', 'id' => 'body', 'name' => 'body' ]) !!}

</div>

<div class="form-group ">
    {!! Form::label('profileName', 'Nome Proprio') !!}
    {!! Form::text('profileName', $user->profile->name, ['class' => 'form-control', 'id' => 'profileName', 'name' => 'profileName']) !!}
</div>

<div class="form-group ">
    {!! Form::label('profileSurname', 'Sobrenome') !!}
    {!! Form::text('profileSurname', $user->profile->surname, ['class' => 'form-control', 'id' => 'profileSurname', 'name' => 'profileSurname']) !!}
</div>

<div class="form-group ">
    {!! Form::label('birth', 'Data de nascimento') !!}
    {!! Form::text('birth', $user->profile->birth, ['class' => 'form-control', 'id' => 'birth', 'name' => 'birth']) !!}
</div>

<div class="form-group ">
    {!! Form::label('local', 'Local') !!}
    {!! Form::text('local', $user->profile->local, ['class' => 'form-control', 'id' => 'local', 'name' => 'local']) !!}
</div>

<div class="form-group ">
    {!! Form::label('country', 'Pais') !!}
    {!! Form::text('country', $user->profile->country, ['class' => 'form-control', 'id' => 'country', 'name' => 'country']) !!}
</div>

<div class="form-group ">
    {!! Form::label('genre', 'Sexo') !!}
    <label>
        @if($user->profile->genre == 'MALE')
            {!! Form::radio('genre', 'MALE',true ) !!} Masculino
        @else
            {!! Form::radio('genre', 'MALE') !!} Masculino
        @endif
    </label>
    <label>
        @if($user->profile->genre == 'FEMALE')
            {!! Form::radio('genre', 'FEMALE', true ) !!} Feminino
        @else
            {!! Form::radio('genre', 'FEMALE') !!} Feminino
        @endif
    </label>
</div>

<div class="form-group ">
    {!! Form::label('social1', 'Redes Sociais') !!}
    {!! Form::text('social1', $user->profile->social1, ['class' => 'form-control', 'id' => 'social1', 'name' => 'social1']) !!}
    {!! Form::text('social2', $user->profile->social2, ['class' => 'form-control', 'id' => 'social2', 'name' => 'social2']) !!}
    {!! Form::text('social3', $user->profile->social3, ['class' => 'form-control', 'id' => 'social3', 'name' => 'social3']) !!}
</div>

<div class="form-group ">
    {!! Form::label('web', 'Pagina pessoal') !!}
    {!! Form::text('web', $user->profile->web, ['class' => 'form-control', 'id' => 'web', 'name' => 'web']) !!}
</div>

<div class="form-group ">
    {!! Form::label('phone', 'Telefone') !!}
    {!! Form::text('phone', $user->profile->phone, ['class' => 'form-control', 'id' => 'phone', 'name' => 'phone']) !!}
</div>

<hr>
<div class="form-group row">
    <div class="col-md-4">
        {!! Form::label('password', 'Password') !!}
    </div>
    <div class="col">
        {!! Form::password('password', null, ['class' => 'form-control', 'id' => 'password', 'name' => 'password']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-md-4">
        {!! Form::label('reppass', 'Repetir a password') !!}
    </div>
    <div class="col">
        {!! Form::password('reppass', null, ['class' => 'form-control', 'id' => 'reppass', 'name' => 'reppass']) !!}
    </div>
</div>
<hr>
<div class="form-group" align="right">
    {!! Form::submit('Salvar as alterações', null, ['class' => 'btn btn-sm btn-primary float-left']) !!}
</div>
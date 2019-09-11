<div class="container mt-2">

    <div class="form-group ">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'name' => 'email']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'name' => 'name']) !!}
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

</div>

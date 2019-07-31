
<div class="row" style="color: #FFFFFF">
    <div class="col">
        {{-- Col 1 --}}

        <div class="form-group ">
            {!! Form::label('search', 'Autor') !!}
            {!! Form::text('search', null, ['class' => 'form-control']) !!}
        </div>



    </div>

    <div class="col">
        {{-- Col 2 --}}



        <div class="form-group" align="right">
            {{ Form::submit('Iniciar Procura', ['class' => 'btn btn-sm btn-primary']) }}
        </div>



    </div>
</div>

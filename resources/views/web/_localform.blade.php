
<div class="row" style="color: #FFFFFF">
    <div class="col">
        {{-- Col 1 --}}


        <div class="col-8 col-sm-6">
            <div class="form-group">
                {!! Form::label('district', 'Selecione o Distrito') !!}
                {!! Form::select(
                    'district',
                    $districts,
                    null,
                    ['class' => 'form-control','id'=>'district', 'name'=>'district']
                    )
                !!}
            </div>

            <div class="form-group">
                {!! Form::label('district', 'Selecione o Concelho') !!}
                {!! Form::select(
                    'county',
                    ['0'=>'Selecione o Concelho'],
                    null,
                    ['class' => 'form-control','id'=>'county', 'name'=>'county']
                    )
                !!}
            </div>

            <div class="form-group" >
                {!! Form::label('place', 'Selecione a localidade') !!}
                {!! Form::select(
                    'place',
                    ['0'=>'Selecione a localidade'],
                    null,
                    ['class' => 'form-control','id'=>'place', 'name'=>'place']
                    )
                !!}
            </div>


        </div>




    </div>

    <div class="col">
        {{-- Col 2 --}}



        <div class="form-group" align="right">
            {{ Form::submit('Iniciar Procura', ['class' => 'btn btn-sm btn-primary']) }}
        </div>



    </div>
</div>

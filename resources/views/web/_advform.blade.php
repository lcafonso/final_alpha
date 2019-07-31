
<div class="row" style="color: #FFFFFF">
    <div class="col">
        {{-- Col 1 --}}

        <div class="form-group ">
            {!! Form::label('name', 'Titulo') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Categorias') !!}
            {!! Form::select('category_id', array_merge(['' => 'Todas'], $categs->toArray()), null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            <label>Entre datas:</label>
            <div class="form-inline">
                {!! Form::label('dataInicio', 'Date Inicial: ') !!}
                <div class="space"></div>
                {!! Form::date('dataInicio') !!}
                <div class="space"></div>
                {!! Form::label('dataFim', 'Date final: ') !!}
                <div class="space"></div>
                {!! Form::date('dataFim') !!}
            </div>

        </div><br>

    </div>

    <div class="col">
        {{-- Col 2 --}}
        <div class="form-group">
            {!! Form::label('tag', 'Etiquetas:') !!}
            {!! Form::select('tag',array_merge(['' => 'Todas'], $tags->toArray()), null, ['class' => 'form-control']) !!}

        </div>


        <div class="form-group" align="right">
            {{ Form::submit('Iniciar Procura', ['class' => 'btn btn-sm btn-primary']) }}
        </div>

        <br>

    </div>
</div>

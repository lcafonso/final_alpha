
<div class="form-group">
    {!! Form::label('name', 'Nome da tecnologia') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'URL Amigavel') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) !!}
</div>

<div class="form-group">
    {{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')

    <script>

        $(document).ready(function(){
            $("#name, #slug").keyup(function(){
                var value = string_to_slug($( this ).val());
                $( "#slug" ).val( value );
            });
        });

    </script>

@endsection
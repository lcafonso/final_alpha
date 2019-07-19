
{{-- conteiner body --}}
<div class="container mt-2">

    @if($metodo == 'edit')
        <a href="{{ url()->previous() }}">Publicações></a>
        <h3 class="title">Editar Publicação</h3>
    @elseif($metodo == 'repost')
        <a href="{{ url()->previous() }}">Publicações></a>
        <div class="row">
            <div class="col-md-2">
                <div class="img-thumbnail" style="width: 150px;height: 150px">
                    <img  src="{{$post->file}}" style="width: 100%;height: auto" alt="">
                </div>
            </div>
            <div class="col">
                <h3 class="title">Repetição da publicação {{$post->id}} - {{$post->name}} </h3>
                <h3 class="title">Autor da Publicação Original: {{$post->user->name}}</h3>
                <p>
                    A imagem que ira carregar ficara automaticamente indexada a esta.
                </p>
                {!! Form::hidden('post_id', $post->id) !!}

            </div>
        </div>
    @else
        <a href="{{ url()->previous() }}">Publicações></a>
        <h3 class="title">Nova Publicação</h3>
    @endif
    <hr>

    {!! Form::hidden('user_id', auth()->user()->id) !!}


    <div class="row">
        <div class="col">
            {{-- Col 1 --}}
            <div class="form-group ">
                {!! Form::label('name', 'Titulo') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name' ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('file', 'Escolha a imagem') !!}
                <div id="image-holder" style="width: auto;height: 200px;  background-color: white"> </div>
                {!! Form::file('file',[ 'id' => 'file' ]) !!}

            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Categorias') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('excerpt', 'Resumo') !!}
                {!! Form::textarea('excerpt', (!empty($post->excerpt)?'Texto original: "'.$post->excerpt.'"':null), ['class' => 'form-control', 'rows' => '2']) !!}
            </div>

        </div>

        <div class="col">
            {{-- Col 2 --}}
            <div class="form-group">
                {!! Form::label('slug', 'URL Amigavel') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug' ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Descrição detalhada') !!}
                {!! Form::textarea('body',(!empty($post->body)?'Texto original: '.$post->body:null), ['class' => 'form-control', 'id' => 'body', 'name' => 'body' ]) !!}
            </div>
        </div>

    </div>
    <hr>


    <div class="form-group">
        {!! Form::label('tags', 'Etiquetas') !!}
        <div>
            @foreach ($tags->chunk(5) as $items)
                <div class="row">
                    @foreach($items as $tag)
                        <div class="col-md-2 portfolio-item">
                            <label>
                                {!! Form::checkbox('tags[]', $tag->id) !!}
                                {{ $tag->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12" style="background-color: #040505; color: #fff"><h1>Informação adicional</h1><small> Opcional</small></div>

        </div>
        <div class="row">
            <div class="col-6 col-sm-4">
                <h4 class="my-3">Detalhes</h4>
                <ul class="list-unstyled list-group">


                    <li class="list-group-item"  style="font-size: 14px;" data-toggle="tooltip" data-placement="left" title="Equipamento Utilizado">
                        <div class="inner-addon left-addon">
                            <img class="glyphicon" src="{{asset('img/camera-retro.svg')}}"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            {!! Form::text('cameraModel', (!empty($post->detail->equipment)?$post->detail->equipment:null), ['class' => 'form-control', 'id' => 'cameraModel' ]) !!}

                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="row " data-toggle="tooltip" data-placement="left" title="Dimensões XY">
                            <div class="inner-addon left-addon ml-3" style="width: 45%">
                                <img class="glyphicon" src="{{asset('img/resize-tool.svg')}}"  alt="" style="max-height: 100%; fill: #385d7a;" >
                                {!! Form::text('pdX', (!empty($post->detail->dimensionX)?$post->detail->dimensionX:null), ['class' => 'form-control text-right', 'id' => 'pdX' ]) !!}
                            </div>

                            <div class="inner-addon left-addon ml-1" style="width: 44%">
                                {!! Form::text('pdY', (!empty($post->detail->dimensionY)?$post->detail->dimensionY:null), ['class' => 'form-control text-right', 'id' => 'pdY' ]) !!}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;" data-toggle="tooltip" data-placement="left" title="Distancia focal">
                        <div class="inner-addon left-addon">
                            <img class="glyphicon" src="{{asset('img/focus.svg')}}"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            {!! Form::text('focalDistance', (!empty($post->detail->resolution)?$post->detail->resolution:null), ['class' => 'form-control', 'id' => 'focalDistance' ]) !!}
                        </div>
                    </li>

                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="inner-addon left-addon" data-toggle="tooltip" data-placement="left" title="Abertura">
                            <img class="glyphicon" src="{{asset('img/svg-shutter-icon-2.svg')}}"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            {!! Form::text('aperture', (!empty($post->detail->aperture)?$post->detail->aperture:null), ['class' => 'form-control', 'id' => 'aperture' ]) !!}
                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="inner-addon left-addon" data-toggle="tooltip" data-placement="left" title="Tempo de Exposição">
                            <img class="glyphicon" src="{{asset('img/exposure.svg')}}"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            {!! Form::text('exposureTime', (!empty($post->detail->exposure)?$post->detail->exposure:null), ['class' => 'form-control', 'id' => 'exposureTime' ]) !!}
                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="inner-addon left-addon" data-toggle="tooltip" data-placement="left" title="ISO">
                            <img class="glyphicon" src="{{asset('img/iso-file-format.svg')}}"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            {!! Form::text('ISO', (!empty($post->detail->iso)?$post->detail->iso:null), ['class' => 'form-control', 'id' => 'ISO' ]) !!}
                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="row " data-toggle="tooltip" data-placement="left" title="Localização Longitude/Latitude">
                            <div class="inner-addon left-addon ml-3" style="width: 45%">
                                <img class="glyphicon" src="{{asset('img/world-location.svg')}}"  alt="" style="max-height: 100%; fill: #385d7a;" >
                                {!! Form::text('imgLong', (!empty($post->detail->longitude)?$post->detail->longitude:null), ['class' => 'form-control text-right', 'id' => 'imgLong' ]) !!}
                            </div>
                            <div class="inner-addon left-addon ml-1" style="width: 44%">
                                {!! Form::text('imgLat', (!empty($post->detail->latitude)?$post->detail->latitude:null), ['class' => 'form-control text-right', 'id' => 'imgLat' ]) !!}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <div class="inner-addon left-addon" data-toggle="tooltip" data-placement="left" title="Tecnologia Utilizada">
                            <img class="glyphicon" src="{{asset('img/chip.svg')}}"  alt="" style="max-height: 100%; fill: #385d7a;" >
                            {!! Form::select( 'technologie', $technologies, null, ['class' => 'form-control text-right','id'=>'technologie', 'name'=>'technologie'])!!}
                            {{--
                            {!! Form::text('imgTechn', null, ['class' => 'form-control', 'id' => 'imgTechn' ]) !!}
                            --}}
                        </div>
                    </li>


                </ul>
            </div>



            <div class="col-6 col-sm-4">
                <h4 class="my-3">Localização</h4>
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
            <div class="col-6 col-sm-4">
                <h4 class="my-3">Mapa</h4>
                <div id="map" class="map"></div>
                <div id="overlay" style="background-color: red; width: 20px; height: 20px; border-radius: 10px;"></div>
            </div>

        </div>
    </div>

    <hr>
    <div class="form-group">
        {!! Form::label('status', 'Estado actual:') !!}
        <br>
        <label>
            {!! Form::radio('status', 'PUBLISHED', true ) !!} Publicado
        </label>
        <label>
            {!! Form::radio('status', 'DRAFT' ) !!} Rascunho
        </label>
    </div>

    <hr>

    <div class="form-group" align="right">
        {{ Form::submit('Gravar as auterações', ['class' => 'btn btn-sm btn-primary']) }}
    </div>

    <br>
</div>
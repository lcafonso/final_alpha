


    <div id="tools-buttons" class="card">
        <h3>Ferramentas</h3>
        <div class="card-block">

            @if(Auth::check())
                <div class="row d-flex flex-row-reverse" >
                    @if($post->post_id)
                        <div class="col-md-4" rel="tooltip" title="Comparar com original">
                            <a href="{{route('compare',$post->id)}}" class="btn btn-sm btn-secondary"  style="height: 60px;width: 100px; border-radius: 12px">
                                <img src="{{asset('img/compare.svg')}}" style="width: auto;height:100%;filter: invert(100%);" alt="">
                            </a>
                        </div>
                    @endif
                    <div class="col-md-4" rel="tooltip" title="Carregar repetição da foto">
                        <a href="{{route('repost',$post->id)}}" class="btn btn-sm btn-secondary"  style="height: 60px;width: 100px; border-radius: 12px">
                            <img src="{{asset('img/reload.svg')}}" style="width: auto;height:100%;filter: invert(100%);" alt="">
                        </a>
                    </div>
                    <div class="col-md-4" rel="tooltip" title="Imprimir ficha de campo">
                        <a href="{{route('generate-pdf',$post->slug)}}" class="btn btn-sm btn-secondary" style="height: 60px;width: 100px; border-radius: 12px"">
                        <img src="{{asset('img/print.svg')}}" style="width: auto;height: 100%;filter: invert(100%);" alt="">
                        </a>
                    </div>
                </div>
            @endif

        </div>
    </div>






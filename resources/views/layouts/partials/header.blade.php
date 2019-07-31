<!-- Page Header -->
@if($pageData['smenu'] == 1)

    <header>


        <!--- Video Backgrond -->
        <div class="video-background">
            <div class="video-wrap">
                <div id="video">
                    <video id="bgvid" autoplay loop muted playsinline>
                        <source src="{{asset('img/videos/promo.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <!--- Caption -->
        <div class="caption text-left ml-5">
            <h3>REPOSITÓRIO DE FOTOGRAFIAS</h3>
            <h1>DIGITAL LANDSCAPE</h1>
            <h5>As mudanças paisagisticas ao longo do tempo</h5>

            <a href="#contribut" class="btn btn-outline-light btn-lg">Mais Informações</a>

        </div>

        <!--- Apoios -->
        <div class="home-page__cover__footer">
            <div class="title">Apoio:</div>
            <img src="{{asset('img/ipb_cimo.svg')}}" alt="">
        </div>

    </header>

@else

    <header class="masthead" style="background-image: url({{asset( $pageData['bg'] ) }} ); max-height: 350px; )">


    <div class="overlay"></div>


        <div class="row" >
            <div class="col-lg-8 col-md-12 mx-auto">
                @if($pageData['smenu'] != 1)
                    <div class="post-heading">
                        <!-- Global Page Section Start  -->
                        <section class="global-page-header" >

                                <div class="row" >
                                    <div class="col-md-6" >
                                        <div class="block">
                                            <h2 >{{ $pageData['title'] }}</h2>
                                        </div>
                                    </div>
                                    @if($pageData['smenu'] == 23)
                                        <div class="col-md-6" >
                                            <form action="{{ route('simple_search') }}" method="GET">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Titulo" aria-describedby="basic-addon2" name="search">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                                                        <a class="btn btn-secondary" href="#" onclick="toggle_visibility('foo');"><i class="fas fa-sliders-h"></i></a>
                                                    </div>
                                                </div>
                                            </form>

                                    @endif
                                </div>

                        </section>
                    </div>
                @endif
            </div>
        </div>


    </header>




@endif





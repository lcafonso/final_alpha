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

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @if($pageData['smenu'] != 1)
                    <div class="post-heading">
                        <!-- Global Page Section Start  -->
                        <section class="global-page-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="block">
                                            <h2>{{ $pageData['title'] }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                @endif
            </div>
        </div>
    </div>

    </header>

@endif





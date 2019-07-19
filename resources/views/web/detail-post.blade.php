@extends('layouts.main')


{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <!-- Core CSS file -->
    <link rel="stylesheet" href="{{asset('vendor/PhotoSwipe/dist/photoswipe.css')}}">

    <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
         In the folder of skin CSS file there are also:
         - .png and .svg icons sprite,
         - preloader.gif (for browsers that do not support CSS animations) -->
    <link rel="stylesheet" href="{{asset('vendor/PhotoSwipe/dist/default-skin/default-skin.css')}}">


    <link rel="stylesheet" href="{{asset('vendor/rotatingCard/rotating-card.css')}}">

    <!-- Core JS file -->
    <script src="{{asset('vendor/PhotoSwipe/dist/photoswipe.min.js')}}"></script>

    <!-- UI JS file -->
    <script src="{{asset('vendor/PhotoSwipe/dist/photoswipe-ui-default.min.js')}}"></script>


    <script src="{{ asset('js/jssor.slider-27.5.0.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
                $AutoPlay: 1,
                $AutoPlaySteps: 5,
                $SlideDuration: 160,
                $SlideWidth: 200,
                $SlideSpacing: 3,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $Steps: 5
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>

    <style>


        body{
            background: -webkit-linear-gradient(left, #616489, #fff);
        }

        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 057 css*/
        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 073 css*/
        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}


        .my-gallery {
            width: 100%;
            float: left;
        }
        .my-gallery img {
            width: 100%;
            height: auto;
        }
        .my-gallery figure {
            display: block;
            float: left;
            margin: 0 5px 5px 0;
            max-width: 750px;
            width: 100%;
        }
        .my-gallery figcaption {
            display: none;
        }

    </style>


@endsection

{{--Section body--}}
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <h1>{{ $post->name }} </h1>
        <small>Categoria: {{ $post->category->name  }}</small>
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">

                <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <a href="{{ $post->file }}" itemprop="contentUrl" data-size="1280x720">
                            <img src="{{ $post->file }}" itemprop="thumbnail" alt="{{ $post->name }}"  onContextMenu="return false;"/>
                        </a>
                        <figcaption itemprop="caption description">{{ $post->name }}</figcaption>
                    </figure>
                </div>

            </div>

            <div class="col-md-4">

                <h3><small>Detalhes</small></h3>
                <ul classs="list-unstyled list-group">
                    <li class="list-group-item" style="font-size: 14px;">
                        <img src="{{asset('img/camera-retro.svg')}}" alt="" style="max-height: 20px; fill: #385d7a;"> {{ $post->detail->equipment }}</li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <img src="{{asset('img/resize-tool.svg')}}" alt="" style="max-height: 20px"> {{ $post->detail->dimensionY }} x {{ $post->detail->dimensionX }}</li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <img src="{{asset('img/resolution.svg')}}" alt="" style="max-height: 20px"> {{ $post->detail->resolution }}</li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <img src="{{asset('img/svg-shutter-icon-2.svg')}}" alt="" style="max-height: 20px"> {{ $post->detail->aperture }}</li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <img src="{{asset('img/brightness.svg')}}" alt="" style="max-height: 20px"> {{ $post->detail->exposure }}</li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <img src="{{asset('img/iso-file-format.svg')}}" alt="" style="max-height: 20px"> {{ $post->detail->iso }}</li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <img src="{{asset('img/world-location.svg')}}" alt="" style="max-height: 20px"> {{ $post->detail->latitude }} ;  {{ $post->detail->longitude }}</li>
                    <li class="list-group-item" style="font-size: 14px;">
                        <img src="{{asset('img/chip.svg')}}" alt="" style="max-height: 20px">{{ $post->detail->technologie->name}} </li>
                </ul>

                @if(Auth::check())
                    <hr>
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
        <!-- /.row -->
        <div class="row">
            <!-- Descrição  -->
            <div class="col-md-8">
                <hr>
                <h3>Resumo</h3>
                <p>{{ $post->excerpt }}</p>
                <hr>
                <h3>Descrição</h3>
                <p>{!! $post->body !!}</p>
                <hr>
                <h3>Etiquetas</h3>
                @foreach ($post->tags->chunk(5) as $items)
                    <div class="row">
                        @foreach($items as $tag)
                            <div class="col">
                                @if ($tag->id)
                                    {{ $tag->name }}
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endforeach




            </div>
            <!-- User Card -->
            <div class="col-md-4">
                <hr>
                <h3><small>Publicado por:</small></h3>
                <div class="card-container manual-flip">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="{{asset('vendor/rotatingCard/rotating_card_thumb.jpg')}}"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="{{asset($user->profile->file)}}"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">{{$user->name}}</h3>
                                    <p class="profession">{{$role->name}}</p>

                                    <p class="text-center">{{$user->profile->body}}</p>
                                </div>
                                <div class="footer">
                                    <button class="btn btn-simple" rel="tooltip" title="para mais informações" onclick="rotateCard(this)">
                                        <i class="fas fa-share"></i> Virar
                                    </button>

                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">{{$user->name}}</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">informação</h4>
                                    <p class="text-center">{{$user->email}}, {{$user->profile->local}}, {{$user->profile->country}}</p>

                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>235</h4>
                                            <p>
                                                Followers
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>114</h4>
                                            <p>
                                                Following
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>{{$numberOfPosts['publicadas']}}/{{$numberOfPosts['total']}}</h4>
                                            <p>
                                                Publicações
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" rel="tooltip" title="virar o cartao" onclick="rotateCard(this)">
                                    <i class="fas fa-reply"></i> Voltar
                                </button>
                                <div class="social-links text-center">
                                    <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#" class="google"><i class="fab fa-google-plus-square"></i></a>
                                    <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->

            </div>

        </div>


        <!-- Related Projects Row -->
        <h3 class="my-4">Outras publicações do autor</h3>

        <div class="row">

            <!-- Place somewhere in the <body> of your page -->
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('user/img/spin.svg')}}" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">

                    @foreach ($posts as $post)

                        <div>
                            <a href="{{ route('detail', $post->slug)  }}">
                                <img data-u="image" src="{{ $post->file }}" />
                            </a>
                        </div>

                    @endforeach

                </div>


                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                    </svg>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe.
                 It's a separate element as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides.
                    PhotoSwipe keeps only 3 of them in the DOM to save memory.
                    Don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}
    <script type="text/javascript">jssor_1_slider_init();</script>

    <!-- Function JS file -->
    <script src="{{asset('vendor/PhotoSwipe/dist/photo.js')}}"></script>


    <script>
        $(document).ready(function()
        {
            $('img').bind('contextmenu', function(e){
                console.log('teste');
                return false;
            });
        });
    </script>

    <script type="text/javascript">
        $().ready(function(){
            $('[rel="tooltip"]').tooltip();

            $('a.scroll-down').click(function(e){
                e.preventDefault();
                scroll_target = $(this).data('href');
                $('html, body').animate({
                    scrollTop: $(scroll_target).offset().top - 60
                }, 1000);
            });

        });

        function rotateCard(btn){
            var $card = $(btn).closest('.card-container');
            console.log($card);
            if($card.hasClass('hover')){
                $card.removeClass('hover');
            } else {
                $card.addClass('hover');
            }
        }


    </script>

@endsection

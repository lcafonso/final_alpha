@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}




    <style>
        body{
            background: -webkit-linear-gradient(left, #33775f, #fff);
        }

        #grid-container {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }

        .grid-item {
            opacity: 0;
            float: left;
            box-sizing: border-box;
            padding: 5px;
        }



        .grid-item img {

            border-radius: 10px;

            width: 100%;
            height: 100%;
        }

        .grid-item.loaded {
            opacity: 1;
            transition: opacity .5s;
        }

        .efeito {
            position: relative;
            bottom: 20%;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.5);
            overflow: hidden;
            width: 0;
            height: 20%;
            transition: .5s ease;
        }



        .grid-item:hover .efeito {
            width: 100%;

        }


        .text {
            white-space: nowrap;
            color: #ffffff;
            font-size: 20px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }


        .icon {
            display: inline-block;
            margin-top: 10px;
            width: 30px;
            height: 30px;
            background-size: cover;
        }

        .icon-compare {
            background-image: url({{asset('img/compare.svg')}});


        }

        .icon-compare:hover,
        .icon-compare:focus {
            filter: invert(27%) sepia(51%) saturate(2878%) hue-rotate(346deg) brightness(104%) contrast(5%);

        }

        .icon-detail {
            background-image: url({{asset('img/detail.svg')}});
        }

        .icon-detail:hover,
        .icon-detail:focus {
            filter: invert(27%) sepia(51%) saturate(2878%) hue-rotate(346deg) brightness(104%) contrast(5%);
        }

    </style>


@endsection

{{--Section footer--}}

@section('content')

    <div id="grid-container">

        @foreach($posts as $post)

            <a href="" class="grid-item" >

                    <img src="{{asset($post->file)}}" alt="{{$post->name}}" class="image"/>

                    <div class="efeito">

                        <div class="text">

                            <span class="icon icon-compare" data-url="{{URL::to('home')}}" ></span>

                            <span class="icon icon-detail" data-url="{{URL::to('publications/'.$post->slug)}} "></button>

                        </div>
                    </div>


            </a>


        @endforeach



    </div>
    <div class="container">
        <nav class="blog-pagination">
            {{ $posts->render() }}
        </nav>
    </div>




@endsection

{{--Section footer--}}
@section('footer')

    <script>


        $('span').click(function(){
            var thisdata = $(this).attr('data-url');
            window.location.href = thisdata,true;

            return false;
        });

    </script>

    <script>
        /*!
         * imagesLoaded PACKAGED v4.1.4
         * JavaScript is all like "You images are done yet or what?"
         * MIT License
         */


        /* jshint unused: true, undef: true, strict: true */

        ( function( global, factory ) {
            // universal module definition
            /* jshint strict: false */ /* globals define, module, window */
            if ( typeof define == 'function' && define.amd ) {
                // AMD - RequireJS
                define( 'ev-emitter/ev-emitter',factory );
            } else if ( typeof module == 'object' && module.exports ) {
                // CommonJS - Browserify, Webpack
                module.exports = factory();
            } else {
                // Browser globals
                global.EvEmitter = factory();
            }

        }( typeof window != 'undefined' ? window : this, function() {



            function EvEmitter() {}

            var proto = EvEmitter.prototype;

            proto.on = function( eventName, listener ) {
                if ( !eventName || !listener ) {
                    return;
                }
                // set events hash
                var events = this._events = this._events || {};
                // set listeners array
                var listeners = events[ eventName ] = events[ eventName ] || [];
                // only add once
                if ( listeners.indexOf( listener ) == -1 ) {
                    listeners.push( listener );
                }

                return this;
            };

            proto.once = function( eventName, listener ) {
                if ( !eventName || !listener ) {
                    return;
                }
                // add event
                this.on( eventName, listener );
                // set once flag
                // set onceEvents hash
                var onceEvents = this._onceEvents = this._onceEvents || {};
                // set onceListeners object
                var onceListeners = onceEvents[ eventName ] = onceEvents[ eventName ] || {};
                // set flag
                onceListeners[ listener ] = true;

                return this;
            };

            proto.off = function( eventName, listener ) {
                var listeners = this._events && this._events[ eventName ];
                if ( !listeners || !listeners.length ) {
                    return;
                }
                var index = listeners.indexOf( listener );
                if ( index != -1 ) {
                    listeners.splice( index, 1 );
                }

                return this;
            };

            proto.emitEvent = function( eventName, args ) {
                var listeners = this._events && this._events[ eventName ];
                if ( !listeners || !listeners.length ) {
                    return;
                }
                // copy over to avoid interference if .off() in listener
                listeners = listeners.slice(0);
                args = args || [];
                // once stuff
                var onceListeners = this._onceEvents && this._onceEvents[ eventName ];

                for ( var i=0; i < listeners.length; i++ ) {
                    var listener = listeners[i]
                    var isOnce = onceListeners && onceListeners[ listener ];
                    if ( isOnce ) {
                        // remove listener
                        // remove before trigger to prevent recursion
                        this.off( eventName, listener );
                        // unset once flag
                        delete onceListeners[ listener ];
                    }
                    // trigger listener
                    listener.apply( this, args );
                }

                return this;
            };

            proto.allOff = function() {
                delete this._events;
                delete this._onceEvents;
            };

            return EvEmitter;

        }));

        /*!
         * imagesLoaded v4.1.4
         * JavaScript is all like "You images are done yet or what?"
         * MIT License
         */

        ( function( window, factory ) { 'use strict';
            // universal module definition

            /*global define: false, module: false, require: false */

            if ( typeof define == 'function' && define.amd ) {
                // AMD
                define( [
                    'ev-emitter/ev-emitter'
                ], function( EvEmitter ) {
                    return factory( window, EvEmitter );
                });
            } else if ( typeof module == 'object' && module.exports ) {
                // CommonJS
                module.exports = factory(
                    window,
                    require('ev-emitter')
                );
            } else {
                // browser global
                window.imagesLoaded = factory(
                    window,
                    window.EvEmitter
                );
            }

        })( typeof window !== 'undefined' ? window : this,

        // --------------------------  factory -------------------------- //

            function factory( window, EvEmitter ) {



                var $ = window.jQuery;
                var console = window.console;

                // -------------------------- helpers -------------------------- //

                // extend objects
                function extend( a, b ) {
                    for ( var prop in b ) {
                        a[ prop ] = b[ prop ];
                    }
                    return a;
                }

                var arraySlice = Array.prototype.slice;

                // turn element or nodeList into an array
                function makeArray( obj ) {
                    if ( Array.isArray( obj ) ) {
                        // use object if already an array
                        return obj;
                    }

                    var isArrayLike = typeof obj == 'object' && typeof obj.length == 'number';
                    if ( isArrayLike ) {
                        // convert nodeList to array
                        return arraySlice.call( obj );
                    }

                    // array of single index
                    return [ obj ];
                }

                // -------------------------- imagesLoaded -------------------------- //

                /**
                 * @param {Array, Element, NodeList, String} elem
                 * @param {Object or Function} options - if function, use as callback
                 * @param {Function} onAlways - callback function
                 */
                function ImagesLoaded( elem, options, onAlways ) {
                    // coerce ImagesLoaded() without new, to be new ImagesLoaded()
                    if ( !( this instanceof ImagesLoaded ) ) {
                        return new ImagesLoaded( elem, options, onAlways );
                    }
                    // use elem as selector string
                    var queryElem = elem;
                    if ( typeof elem == 'string' ) {
                        queryElem = document.querySelectorAll( elem );
                    }
                    // bail if bad element
                    if ( !queryElem ) {
                        console.error( 'Bad element for imagesLoaded ' + ( queryElem || elem ) );
                        return;
                    }

                    this.elements = makeArray( queryElem );
                    this.options = extend( {}, this.options );
                    // shift arguments if no options set
                    if ( typeof options == 'function' ) {
                        onAlways = options;
                    } else {
                        extend( this.options, options );
                    }

                    if ( onAlways ) {
                        this.on( 'always', onAlways );
                    }

                    this.getImages();

                    if ( $ ) {
                        // add jQuery Deferred object
                        this.jqDeferred = new $.Deferred();
                    }

                    // HACK check async to allow time to bind listeners
                    setTimeout( this.check.bind( this ) );
                }

                ImagesLoaded.prototype = Object.create( EvEmitter.prototype );

                ImagesLoaded.prototype.options = {};

                ImagesLoaded.prototype.getImages = function() {
                    this.images = [];

                    // filter & find items if we have an item selector
                    this.elements.forEach( this.addElementImages, this );
                };

                /**
                 * @param {Node} element
                 */
                ImagesLoaded.prototype.addElementImages = function( elem ) {
                    // filter siblings
                    if ( elem.nodeName == 'IMG' ) {
                        this.addImage( elem );
                    }
                    // get background image on element
                    if ( this.options.background === true ) {
                        this.addElementBackgroundImages( elem );
                    }

                    // find children
                    // no non-element nodes, #143
                    var nodeType = elem.nodeType;
                    if ( !nodeType || !elementNodeTypes[ nodeType ] ) {
                        return;
                    }
                    var childImgs = elem.querySelectorAll('img');
                    // concat childElems to filterFound array
                    for ( var i=0; i < childImgs.length; i++ ) {
                        var img = childImgs[i];
                        this.addImage( img );
                    }

                    // get child background images
                    if ( typeof this.options.background == 'string' ) {
                        var children = elem.querySelectorAll( this.options.background );
                        for ( i=0; i < children.length; i++ ) {
                            var child = children[i];
                            this.addElementBackgroundImages( child );
                        }
                    }
                };

                var elementNodeTypes = {
                    1: true,
                    9: true,
                    11: true
                };

                ImagesLoaded.prototype.addElementBackgroundImages = function( elem ) {
                    var style = getComputedStyle( elem );
                    if ( !style ) {
                        // Firefox returns null if in a hidden iframe https://bugzil.la/548397
                        return;
                    }
                    // get url inside url("...")
                    var reURL = /url\((['"])?(.*?)\1\)/gi;
                    var matches = reURL.exec( style.backgroundImage );
                    while ( matches !== null ) {
                        var url = matches && matches[2];
                        if ( url ) {
                            this.addBackground( url, elem );
                        }
                        matches = reURL.exec( style.backgroundImage );
                    }
                };

                /**
                 * @param {Image} img
                 */
                ImagesLoaded.prototype.addImage = function( img ) {
                    var loadingImage = new LoadingImage( img );
                    this.images.push( loadingImage );
                };

                ImagesLoaded.prototype.addBackground = function( url, elem ) {
                    var background = new Background( url, elem );
                    this.images.push( background );
                };

                ImagesLoaded.prototype.check = function() {
                    var _this = this;
                    this.progressedCount = 0;
                    this.hasAnyBroken = false;
                    // complete if no images
                    if ( !this.images.length ) {
                        this.complete();
                        return;
                    }

                    function onProgress( image, elem, message ) {
                        // HACK - Chrome triggers event before object properties have changed. #83
                        setTimeout( function() {
                            _this.progress( image, elem, message );
                        });
                    }

                    this.images.forEach( function( loadingImage ) {
                        loadingImage.once( 'progress', onProgress );
                        loadingImage.check();
                    });
                };

                ImagesLoaded.prototype.progress = function( image, elem, message ) {
                    this.progressedCount++;
                    this.hasAnyBroken = this.hasAnyBroken || !image.isLoaded;
                    // progress event
                    this.emitEvent( 'progress', [ this, image, elem ] );
                    if ( this.jqDeferred && this.jqDeferred.notify ) {
                        this.jqDeferred.notify( this, image );
                    }
                    // check if completed
                    if ( this.progressedCount == this.images.length ) {
                        this.complete();
                    }

                    if ( this.options.debug && console ) {
                        console.log( 'progress: ' + message, image, elem );
                    }
                };

                ImagesLoaded.prototype.complete = function() {
                    var eventName = this.hasAnyBroken ? 'fail' : 'done';
                    this.isComplete = true;
                    this.emitEvent( eventName, [ this ] );
                    this.emitEvent( 'always', [ this ] );
                    if ( this.jqDeferred ) {
                        var jqMethod = this.hasAnyBroken ? 'reject' : 'resolve';
                        this.jqDeferred[ jqMethod ]( this );
                    }
                };

                // --------------------------  -------------------------- //

                function LoadingImage( img ) {
                    this.img = img;
                }

                LoadingImage.prototype = Object.create( EvEmitter.prototype );

                LoadingImage.prototype.check = function() {
                    // If complete is true and browser supports natural sizes,
                    // try to check for image status manually.
                    var isComplete = this.getIsImageComplete();
                    if ( isComplete ) {
                        // report based on naturalWidth
                        this.confirm( this.img.naturalWidth !== 0, 'naturalWidth' );
                        return;
                    }

                    // If none of the checks above matched, simulate loading on detached element.
                    this.proxyImage = new Image();
                    this.proxyImage.addEventListener( 'load', this );
                    this.proxyImage.addEventListener( 'error', this );
                    // bind to image as well for Firefox. #191
                    this.img.addEventListener( 'load', this );
                    this.img.addEventListener( 'error', this );
                    this.proxyImage.src = this.img.src;
                };

                LoadingImage.prototype.getIsImageComplete = function() {
                    // check for non-zero, non-undefined naturalWidth
                    // fixes Safari+InfiniteScroll+Masonry bug infinite-scroll#671
                    return this.img.complete && this.img.naturalWidth;
                };

                LoadingImage.prototype.confirm = function( isLoaded, message ) {
                    this.isLoaded = isLoaded;
                    this.emitEvent( 'progress', [ this, this.img, message ] );
                };

                // ----- events ----- //

                // trigger specified handler for event type
                LoadingImage.prototype.handleEvent = function( event ) {
                    var method = 'on' + event.type;
                    if ( this[ method ] ) {
                        this[ method ]( event );
                    }
                };

                LoadingImage.prototype.onload = function() {
                    this.confirm( true, 'onload' );
                    this.unbindEvents();
                };

                LoadingImage.prototype.onerror = function() {
                    this.confirm( false, 'onerror' );
                    this.unbindEvents();
                };

                LoadingImage.prototype.unbindEvents = function() {
                    this.proxyImage.removeEventListener( 'load', this );
                    this.proxyImage.removeEventListener( 'error', this );
                    this.img.removeEventListener( 'load', this );
                    this.img.removeEventListener( 'error', this );
                };

                // -------------------------- Background -------------------------- //

                function Background( url, element ) {
                    this.url = url;
                    this.element = element;
                    this.img = new Image();
                }

                // inherit LoadingImage prototype
                Background.prototype = Object.create( LoadingImage.prototype );

                Background.prototype.check = function() {
                    this.img.addEventListener( 'load', this );
                    this.img.addEventListener( 'error', this );
                    this.img.src = this.url;
                    // check if image is already complete
                    var isComplete = this.getIsImageComplete();
                    if ( isComplete ) {
                        this.confirm( this.img.naturalWidth !== 0, 'naturalWidth' );
                        this.unbindEvents();
                    }
                };

                Background.prototype.unbindEvents = function() {
                    this.img.removeEventListener( 'load', this );
                    this.img.removeEventListener( 'error', this );
                };

                Background.prototype.confirm = function( isLoaded, message ) {
                    this.isLoaded = isLoaded;
                    this.emitEvent( 'progress', [ this, this.element, message ] );
                };

                // -------------------------- jQuery -------------------------- //

                ImagesLoaded.makeJQueryPlugin = function( jQuery ) {
                    jQuery = jQuery || window.jQuery;
                    if ( !jQuery ) {
                        return;
                    }
                    // set local variable
                    $ = jQuery;
                    // $().imagesLoaded()
                    $.fn.imagesLoaded = function( options, callback ) {
                        var instance = new ImagesLoaded( this, options, callback );
                        return instance.jqDeferred.promise( $(this) );
                    };
                };
                // try making plugin
                ImagesLoaded.makeJQueryPlugin();

                // --------------------------  -------------------------- //

                return ImagesLoaded;

            });
    </script>

    // --------------------------  -------------------------- //
    <script>

        function justifiedGrid(parameters) {

            var $hgrid_container = $(parameters.gridContainer);
            var $hgrid_items = $(parameters.gridItems);
            var imagesLoadedEnabled = parameters.enableImagesLoaded;
            var gutter = parameters.gutter;

            function hgrid_get_orientation(element) {
                if(element.width() >= element.height()) {
                    return "l";
                } else {
                    return "p";
                }
            }

            function grid_initialisation($hgrid_items) {
                // Step 0 : Index the hgrid-items, reinit datas
                $hgrid_items.each(function(index) {
                    $(this).css('padding', gutter+"px");
                    $(this).attr('data-index', index);
                    $(this).addClass('hgrid-item loaded');
                    $(this).removeClass('resized');
                });

                // Step 1 : Size the div
                $hgrid_items.each(function() {
                    $(this).css('width', $(this).find('img').width());
                    $(this).css('height', $(this).find('img').height());
                    $(this).addClass('resized');
                });

                // Step 2 : Get orientations array
                orientations = new Array;
                $hgrid_items.each(function() {
                    orientations.push(hgrid_get_orientation($(this)));
                });
                // Orientations : Array['l', 'l', 'p', ..., 'l']
            }

            function construct_lines() {
                if($(window).width() >= 960) {
                    max_line_score = 8;
                }
                if($(window).width() >= 660 && $(window).width() <= 960) {
                    max_line_score = 6;
                }
                if($(window).width() <= 660) {
                    max_line_score = 4;
                }
                var current_score = 0;
                var number_of_images = orientations.length;
                lines = new Array;
                var line = new Array;
                line_score = new Array;
                orientations.forEach(function(orientation, index){
                    if(orientation == 'l') {
                        // If image still in current line
                        if(current_score + 2 <= max_line_score) {
                            if(index != number_of_images - 1) {
                                current_score += 2;
                                line.push($('.hgrid-item[data-index='+index+']'));
                            }
                            else {
                                current_score += 2;
                                line_score.push(current_score);
                                line.push($('.hgrid-item[data-index='+index+']'));
                                lines.push(line);
                            }
                        }
                        // If image is the first of next line
                        else {
                            if(index != number_of_images - 1) {
                                line_score.push(current_score);
                                current_score = 2;
                                // We push the previous line
                                lines.push(line);
                                // We init it again
                                line = new Array;
                                line.push($('.hgrid-item[data-index='+index+']'));
                            }
                            else {
                                line_score.push(current_score);
                                current_score = 2;
                                line_score.push(current_score);
                                // We push the previous line
                                lines.push(line);
                                // We init it again
                                line = new Array;
                                line.push($('.hgrid-item[data-index='+index+']'));
                                lines.push(line);
                            }
                        }
                    }
                    else {
                        // If image still in current line
                        if(current_score + 1 <= max_line_score) {
                            if(index != number_of_images - 1) {
                                current_score += 1;
                                line.push($('.hgrid-item[data-index='+index+']'));
                            }
                            else {
                                current_score += 1;
                                line_score.push(current_score);
                                line.push($('.hgrid-item[data-index='+index+']'));
                                lines.push(line);
                            }
                        }
                        // If image is the first of next line
                        else {
                            if(index != number_of_images - 1) {
                                line_score.push(current_score);
                                current_score = 1;
                                // We push the previous line
                                lines.push(line);
                                // We init it again
                                line = new Array;
                                line.push($('.hgrid-item[data-index='+index+']'));
                            }
                            else {
                                line_score.push(current_score);
                                current_score = 1;
                                line_score.push(current_score);
                                // We push the previous line
                                lines.push(line);
                                // We init it again
                                line = new Array;
                                line.push($('.hgrid-item[data-index='+index+']'));
                                lines.push(line);
                            }
                        }
                    }
                });
                // Lines : Array[[n,n,n,n,n], [n,n,n,n],..., [n,n,n,n]]
            }

            function magic() {
                lines.forEach(function(line, line_index){
                    if(line_score[line_index] >= max_line_score - 1) {
                        var images_in_line = line.length;

                        $theContainer = $hgrid_container;
                        // L = Width of the Container
                        var L = $theContainer.width()-2;
                        // m = margin
                        var m = 0;

                        // oH = originalHeight :: oW = originalWidth :: r = ratio
                        var oW = [];
                        var oH = [];
                        var r = [];
                        var count = 0;

                        line.forEach(function(hgrid_item, index) {
                            var imgWidth = hgrid_item.width();
                            var imgHeight = hgrid_item.height();

                            oW.push(imgWidth);
                            oH.push(imgHeight);
                            r.push(imgWidth/imgHeight);
                            count += 1;
                        });

                        // rW = reduced Width
                        var rW = [];
                        var sum = 0;
                        for (i = 0; i <= count-1; i++) {
                            for(j = 0; j <= count-1; j++) {
                                sum += r[j] / r[i];
                            }
                            var rWi = ( L - (count-1)*m ) / sum;
                            rW.push(rWi);
                            sum = 0;
                        }

                        var lineHeight = rW[0]/r[0];

                        var i=0;
                        line.forEach(function(hgrid_item, index) {
                            hgrid_item.css({'height': lineHeight, 'width': rW[i]});
                            hgrid_item.animate({'opacity': 1}, 500);
                            i += 1;
                        });
                    }
                    else {
                        var images_in_line = line.length;

                        $theContainer = $hgrid_container;
                        // L = Width of the Container
                        if(line_score[line_index] <= max_line_score / 2) {
                            var L = $theContainer.width()/2-2;
                        }
                        else {
                            var L = $theContainer.width()-$theContainer.width()/3-2;
                        }
                        // m = margin
                        var m = 0;

                        // oH = originalHeight :: oW = originalWidth :: r = ratio
                        var oW = [];
                        var oH = [];
                        var r = [];
                        var count = 0;

                        line.forEach(function(hgrid_item, index) {
                            var imgWidth = hgrid_item.width();
                            var imgHeight = hgrid_item.height();

                            oW.push(imgWidth);
                            oH.push(imgHeight);
                            r.push(imgWidth/imgHeight);
                            count += 1;
                        });

                        // rW = reduced Width
                        var rW = [];
                        var sum = 0;
                        for (i = 0; i <= count-1; i++) {
                            for(j = 0; j <= count-1; j++) {
                                sum += r[j] / r[i];
                            }
                            var rWi = ( L - (count-1)*m ) / sum;
                            rW.push(rWi);
                            sum = 0;
                        }

                        var lineHeight = rW[0]/r[0];

                        var i=0;
                        line.forEach(function(hgrid_item, index) {
                            hgrid_item.css({'height': lineHeight, 'width': rW[i]});
                            hgrid_item.animate({'opacity': 1}, 500);
                            i += 1;
                        });
                    }
                });
            }

            this.reInitGrid = function() {
                $hgrid_items.each(function() {
                    $(this).attr('style', '');
                });
                grid_initialisation($hgrid_items);
                construct_lines();
                magic();
            }

            this.initGrid = function () {

                var grid = this;

                if(imagesLoadedEnabled) {
                    $hgrid_container.imagesLoaded(function() {

                        // Step 1 : init and get orientations array
                        grid_initialisation($hgrid_items);

                        // Step 2 : Construct the lines array
                        construct_lines();

                        // Step 4 : Let's size the images according to the Lines array
                        magic();

                    });
                }
                else {
                    // get all images and iframes
                    var $elems = $('#div').find('img, iframe');

                    // count them
                    var elemsCount = $elems.length;

                    // the loaded elements flag
                    var loadedCount = 0;

                    // attach the load event to elements
                    $elems.on('load', function () {
                        // increase the loaded count
                        loadedCount++;

                        // if loaded count flag is equal to elements count
                        if (loadedCount == elemsCount) {
                            // Step 1 : init and get orientations array
                            grid_initialisation($hgrid_items);

                            // Step 2 : Construct the lines array
                            construct_lines();

                            // Step 4 : Let's size the images according to the Lines array
                            magic();
                        }
                    });

                    grid.reInitGrid();
                }

                $(window).on('resize', function() {
                    grid.reInitGrid();
                });
            }
        }
    </script>

    // --------------------------  -------------------------- //
    <script>
        var parameters = {
            gridContainer: '#grid-container',
            gridItems: '.grid-item',
            enableImagesLoaded: true
        };
        var grid = new justifiedGrid(parameters);
        $('body').imagesLoaded({ background: true }, function() {
            grid.initGrid();
        });
    </script>

@endsection

@extends('web.layout.parent')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/jquery.bxslider.min.css')}}"/>
@endsection

@section('content')

    <div class="page-title text-center">
        <ol class="breadcrumb">
            {{-- <li class="@if (\Request::url() == URL('index')) active @endif"><a href="{{ URL('index') }}">Home  <span class="sr-only">(current)</span></a></li> --}}

            <li><a href="{{ URL('products') }}">Products </a></li>
            <li><a href="{{ URL('index') }}">home </a></li>
        </ol>
    </div>

    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-6" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="img/singleProduct.png"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="img/singleProduct2.png"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="img/singleProduct3.png"></div>

                                </div><!-- Carousel nav -->
                            </div>
                            <div class="row hidden-xs" id="slider-thumbs">
                                <!-- Bottom switcher of slider -->
                                <ul class="hide-bullets">
                                    <li class="col-sm-4 ">
                                        <a class="thumbnail" id="carousel-selector-0"><img src="img/thumb1.png"></a>
                                    </li>

                                    <li class="col-sm-4">
                                        <a class="thumbnail" id="carousel-selector-1"><img src="img/thumb2.png"></a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a class="thumbnail" id="carousel-selector-2"><img src="img/thumb3.png"></a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6" id="carousel-text">
                            <div class="pro-fullDetail">
                                <h3> {{$product->title}} </h3>
                                <div class="rating">
                                    <a href="#"> <i class="fa fa-star"></i> </a>
                                    <a href="#"> <i class="fa fa-star"></i> </a>
                                    <a href="#"> <i class="fa fa-star"></i> </a>
                                    <a href="#"> <i class="fa fa-star-o"></i> </a>
                                </div>
                                <h2> 45.0 $ </h2>
                                <p>
                                    {!! $product->description !!}
                                </p>
                                @forelse($attrs as $attr)
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h3 class="ProOption">{{$attr->title}}: </h3>
                                        </div>
                                        @if($attr->title_en == 'color')
                                            <div class="col-md-8">
                                                @foreach($attr->values as $value)
                                                    <input type="radio" name="color" id="{{$value->value_en}}"
                                                           value="{{$value->value_en}}"/>
                                                    <label for="{{$value->value_en}}"><span
                                                            style="background: {{$value->value_en}}"></span></label>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="col-md-8 sizes">
                                                @foreach($attr->values as $value)
                                                    <a href="#"
                                                       class="size{{$loop->index + 1}}"> {{$value->value_en}} </a>
                                                @endforeach
                                            </div>
                                        @endif

                                    </div>
                                @empty
                                @endforelse
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-4 quan">
                                        <form>
                                            <input type="number" min="1" max="100" value="1"/>
                                        </form>
                                    </div>
                                    <div class="col-md-4 col-sm-3 col-xs-4 col-md-pull-1 quan ">
                                        <a href="#" class="btn btn-default addToCart"> ADD TO CART </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Slider-->


        </div>
    </div>


    <div class="clearfix"></div>
    @include('web.suggested')
    <div class="clearfix"></div>

@endsection


@section('script')
    <script type="text/javascript" src="{{asset('web/js/jquery.bxslider.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#characterLeft').text('140 characters left');
            $('#message').keydown(function () {
                var max = 140;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#characterLeft').text('You have reached the limit');
                    $('#characterLeft').addClass('red');
                    $('#btnSubmit').addClass('disabled');
                } else {
                    var ch = max - len;
                    $('#characterLeft').text(ch + ' characters left');
                    $('#btnSubmit').removeClass('disabled');
                    $('#characterLeft').removeClass('red');
                }
            });
        });

    </script>
    <script>$(document).ready(function () {
            //Initialize tooltips
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                var $target = $(e.target);

                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {

                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

            });
            $(".prev-step").click(function (e) {

                var $active = $('.wizard .nav-tabs li.active');
                prevTab($active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }

    </script>
    <script>
        jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
        jQuery('.quantity').each(function () {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.click(function () {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function () {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });
    </script>
    <script>
        jQuery(document).ready(function ($) {


            $('#carousel-text').html($('#slide-content-0').html());

            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click(function () {
                var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
            });


            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-' + id).html());
            });
        });
    </script>

    <script>
        (function ($) {
            $.fn.spinner = function () {
                this.each(function () {
                    var el = $(this);

                    // add elements
                    el.wrap('<span class="spinner"></span>');
                    el.before('<span class="sub">-</span>');
                    el.after('<span class="add">+</span>');

                    // substract
                    el.parent().on('click', '.sub', function () {
                        if (el.val() > parseInt(el.attr('min')))
                            el.val(function (i, oldval) {
                                return --oldval;
                            });
                    });

                    // increment
                    el.parent().on('click', '.add', function () {
                        if (el.val() < parseInt(el.attr('max')))
                            el.val(function (i, oldval) {
                                return ++oldval;
                            });
                    });
                });
            };
        })(jQuery);

        $('input[type=number]').spinner();
    </script>

@endsection

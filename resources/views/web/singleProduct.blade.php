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
                                <h3> T-shirt </h3>
                                <div class="rating">
                                    <a href="#"> <i class="fa fa-star"></i> </a>
                                    <a href="#"> <i class="fa fa-star"></i> </a>
                                    <a href="#"> <i class="fa fa-star"></i> </a>
                                    <a href="#"> <i class="fa fa-star-o"></i> </a>
                                </div>
                                <h2> 45.0 $ </h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                </p>
                                @forelse($attributes as $attribute)
                                <div class="row">
                                    <div class="col-md-2">
                                       <h3 class="ProOption">{{$attribute->title}}: </h3>
                                    </div>
                                    @if($attribute->title_en == 'color')
                                    <div class="col-md-8">
                                        @forelse($attribute->attributeAttributeValues as $attribute_value)
                                            <input type="radio" name="color" id="{{$attribute_value->value_en}}" value="{{$attribute_value->value_en}}" />
                                            <label for="{{$attribute_value->value_en}}"><span class="{{$attribute_value->value_en}}"></span></label>
                                        @empty
                                        @endforelse
                                            @else
                                                @forelse($attribute->attributeAttributeValues as $attribute_value)
                                                    <a href="#" class="size1"> {{$attribute_value->value_en}} </a>
                                                @empty
                                                @endforelse
                                            @endif
{{--                                        <input type="radio" name="color" id="red" value="red" />--}}
{{--                                        <label for="red"><span class="red"></span></label>--}}

{{--                                        <input type="radio" name="color" id="green" />--}}
{{--                                        <label for="green"><span class="green"></span></label>--}}

{{--                                        <input type="radio" name="color" id="yellow" />--}}
{{--                                        <label for="yellow"><span class="yellow"></span></label>--}}

{{--                                        <input type="radio" name="color" id="olive" />--}}
{{--                                        <label for="olive"><span class="olive"></span></label>--}}

{{--                                        <input type="radio" name="color" id="orange" />--}}
{{--                                        <label for="orange"><span class="orange"></span></label>--}}

{{--                                        <input type="radio" name="color" id="teal" />--}}
{{--                                        <label for="teal"><span class="teal"></span></label>--}}

{{--                                        <input type="radio" name="color" id="blue" />--}}
{{--                                        <label for="blue"><span class="teal"></span></label>--}}

{{--                                        <input type="radio" name="color" id="violet" />--}}
{{--                                        <label for="violet"><span class="violet"></span></label>--}}

{{--                                        <input type="radio" name="color" id="purple" />--}}
{{--                                        <label for="purple"><span class="purple"></span></label>--}}

{{--                                        <input type="radio" name="color" id="pink" />--}}
{{--                                        <label for="pink"><span class="pink"></span></label>--}}

                                    </div>
                                </div>
                                @empty
                                @endforelse
{{--                                <div class="row" style="margin-top: 30px">--}}
{{--                                    <div class="col-md-2">--}}
{{--                                        <h3 class="ProOption">Size : </h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-2 sizes">--}}
{{--                                        <a href="#" class="size1"> S </a>--}}
{{--                                        <a href="#" class="size2"> M </a>--}}
{{--                                        <a href="#" class="size3"> L </a>--}}
{{--                                        <a href="#" class="size4 "> XL </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-4 quan">
                                        <form>
                                            <input type="number" min="1" max="100" value="1" />
                                        </form>
                                    </div>
                                    <div class="col-md-4 col-sm-3 col-xs-4 col-md-pull-1 quan ">
                                        <a href="#" class="btn btn-default addToCart" > ADD TO CART </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Slider-->


        </div>
    </div>

    <div class="DetailsTable">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3> DETAILS </h3>
                </div>
                <div class="col-md-3 col-md-offset-2">
                    <table WIDTH="100%" class="table-responsive">
                        <thead>
                        <tr>
                            <td> Size/Inches </td>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> S </td>
                            </tr>
                            <tr>
                                <td> M </td>
                            </tr>
                            <tr>
                                <td> L </td>
                            </tr>
                            <tr>
                                <td> XL </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- add display : none style to hide it -->
                <div class="col-md-12 ">
                    <table WIDTH="100%" class="table-responsive">
                        <thead>
                        <tr>
                            <td> Shoulder  </td>
                            <td> Bust  </td>
                            <td> Waist  </td>
                            <td>Back Length   </td>
                            <td>Sleve  </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> 12.3 </td>
                            <td> 12.3 </td>
                            <td> 12.3 </td>
                            <td> 50 </td>
                            <td> 20 </td>
                        </tr>
                        <tr>
                            <td>22 </td>
                            <td>22 </td>
                            <td>22 </td>
                            <td>23 </td>
                            <td>56 </td>
                        </tr>
                        <tr>
                            <td> 12 </td>
                            <td> 12 </td>
                            <td> 12 </td>
                            <td> 89 </td>
                            <td> 100 </td>
                        </tr>
                        <tr>
                            <td> 45 </td>
                            <td> 45 </td>
                            <td> 45 </td>
                            <td> 45 </td>
                            <td> 201 </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="suggested">
        <div class="container">
            <div class="section-title">
                <h3>SUGGESTED </h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest1.png" alt="Image"></a></div>
                                    <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest2.png" alt="Image"></a></div>
                                    <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest3.png" alt="Image"></a></div>
                                </div><!--.row-->
                            </div><!--.item-->
                            <div class="item">
                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest1.png" alt="Image"></a></div>
                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest2.png" alt="Image"></a></div>
                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest3.png" alt="Image"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest1.png" alt="Image"></a></div>
                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest2.png" alt="Image"></a></div>
                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest3.png" alt="Image"></a></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>

    @endsection


    @section('script')
    <script type="text/javascript" src="{{asset('web/js/jquery.bxslider.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#characterLeft').text('140 characters left');
        $('#message').keydown(function () {
            var max = 140;
            var len = $(this).val().length;
            if (len >= max) {
                $('#characterLeft').text('You have reached the limit');
                $('#characterLeft').addClass('red');
                $('#btnSubmit').addClass('disabled');
            }
            else {
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
    jQuery('.quantity').each(function() {
        var spinner = jQuery(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

        btnUp.click(function() {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        btnDown.click(function() {
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
    jQuery(document).ready(function($) {



        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
        });
    });
</script>

<script>
    (function($) {
        $.fn.spinner = function() {
            this.each(function() {
                var el = $(this);

                // add elements
                el.wrap('<span class="spinner"></span>');
                el.before('<span class="sub">-</span>');
                el.after('<span class="add">+</span>');

                // substract
                el.parent().on('click', '.sub', function () {
                    if (el.val() > parseInt(el.attr('min')))
                        el.val( function(i, oldval) { return --oldval; });
                });

                // increment
                el.parent().on('click', '.add', function () {
                    if (el.val() < parseInt(el.attr('max')))
                        el.val( function(i, oldval) { return ++oldval; });
                });
            });
        };
    })(jQuery);

    $('input[type=number]').spinner();
</script>

    @endsection

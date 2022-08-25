
@extends('web.layout.parent')

@section('style')
@endsection

@section('content')

    <div class="page-title text-center">
        <ol class="breadcrumb">
            <li><a href="#">{{$product_page->title}}</a></li>
            <li><a href="{{ URL('index') }}">home </a></li>
        </ol>
    </div>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title wow fadeInUp">
                        <h3>{{$product_page->title}}</h3>
                        <p style="padding-bottom :0px;">{!! $product_page->description !!}</p>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInUp">
                    <h4 class="sort"> <i class="fa fa-sliders"></i> Sort by   </h4>
                </div>
                <div class="sortSection">
                    <div class="col-md-9 col-sm-9 col-xs-9 col-md-offset-1 ">
                        <div class="col-md-3 col-md-offset-3 col-sm-3">
                            <select name="sort" class="form-control" id="category">
                                <option value="0">الكل</option>
                                @forelse($categories as $category)
                                    <option value="{{ $category->id }}">{{$category->title}}</option>
                                @empty
                                @endforelse

                            </select>
                        </div>


                        @forelse($attributes as $attribute)
                            <div class="col-md-3 col-sm-3">
                            @if($attribute->attributeAttributeValues != null)
                                <select name="sort" class="form-control" id="{{$attribute->title_en}}">
                                    <option value="0">الكل</option>
                                    @if($attribute->title_en == "color")
                                    @foreach($attribute->attributeAttributeValues as $attribute_value)
                                        <option id="{{$attribute->id}}" style="color: {{$attribute_value->value_en}}" value="{{$attribute_value->id}}">
                                            {{$attribute_value->value}}
                                        </option>
                                    @endforeach
                                    @else
                                        @foreach($attribute->attributeAttributeValues as $attribute_value)
                                            <option value="{{$attribute_value->id}}">{{$attribute_value->value}} </option>
                                        @endforeach
                                    @endif
                                </select>
                            @endif
                            </div>
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
{{--            <div class="clearfix"></div>--}}
{{--            <div class="row wow fadeInUp">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h4 class="categoryName"> Dresses </h4>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="products-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-cardImg p1 ">--}}
{{--                                    <a href="#"><i class="fa fa-heart-o"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-details ">--}}
{{--                                    <h4>Lorem ipsum </h4>--}}
{{--                                    <p> Aenean commodo ligula eget dolor  </p>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <h3 class="proPrice"> 100 $ </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="shipping-icon">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/shopping-cart%20(1).png">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="products-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-cardImg p2">--}}
{{--                                    <a href="#"><i class="fa fa-heart-o"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-details ">--}}
{{--                                    <h4>Lorem ipsum </h4>--}}
{{--                                    <p> Aenean commodo ligula eget dolor  </p>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <h3 class="proPrice"> 100 $ </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="shipping-icon">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/shopping-cart%20(1).png">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="row wow fadeInUp">--}}
{{--                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="products-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-cardImg p3 ">--}}
{{--                                    <a href="#"><i class="fa fa-heart-o"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-details ">--}}
{{--                                    <h4>Lorem ipsum </h4>--}}
{{--                                    <p> Aenean commodo ligula eget dolor  </p>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <h3 class="proPrice"> 100 $ </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="shipping-icon">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/shopping-cart%20(1).png">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="products-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-cardImg p4">--}}
{{--                                    <a href="#"><i class="fa fa-heart-o"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-details ">--}}
{{--                                    <h4>Lorem ipsum </h4>--}}
{{--                                    <p> Aenean commodo ligula eget dolor  </p>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <h3 class="proPrice"> 100 $ </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="shipping-icon">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/shopping-cart%20(1).png">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="clearfix"></div>--}}
{{--            <div class="row wow fadeInUp">--}}
{{--                <div class="col-md-12" style="margin-top: 50px;">--}}
{{--                    <h4 class="categoryName"> T-SHIRT </h4>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="products-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-cardImg p5">--}}
{{--                                    <a href="#"><i class="fa fa-heart-o"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-details ">--}}
{{--                                    <h4>Lorem ipsum </h4>--}}
{{--                                    <p> Aenean commodo ligula eget dolor  </p>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <h3 class="proPrice"> 100 $ </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="shipping-icon">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/shopping-cart%20(1).png">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="products-card">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-cardImg p6 ">--}}
{{--                                    <a href="#"><i class="fa fa-heart-o"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">--}}
{{--                                <div class="products-details ">--}}
{{--                                    <h4>Lorem ipsum </h4>--}}
{{--                                    <p> Aenean commodo ligula eget dolor  </p>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <h3 class="proPrice"> 100 $ </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="shipping-icon">--}}
{{--                                                <a href="#">--}}
{{--                                                    <img src="img/shopping-cart%20(1).png">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row loading">--}}
{{--                <a href="#" style="color: #f689a5">--}}
{{--                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>--}}
{{--                    <span class="sr-only">Loading...</span>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>

{{--    <div class="products-adv">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-sm-12 ">--}}
{{--                    <div class="adv wow fadeInUp">--}}
{{--                        <img src="img/adv1.png" class="topAdv">--}}
{{--                        <div class="adv-content">--}}
{{--                            <h3 class="wow fadeInUp" data-wow-delay=".2s"> Hello Summer </h3>--}}
{{--                            <button type="submit" class="btn btn-default wow slideInUp" data-wow-delay=".2s">order</button>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                   <div class="row">--}}
{{--                       <div class="col-md-12 col-sm-6 col-xs-6">--}}
{{--                           <div class="adv  wow fadeInUp">--}}
{{--                               <img src="img/adv2.png " class="img-responsive">--}}
{{--                               <div class="adv-content2">--}}
{{--                                   <h3 class="wow fadeInUp" data-wow-delay=".2s"> polo shirt  </h3>--}}

{{--                               </div>--}}
{{--                               <img src="img/arrow.png" class="arrowMore">--}}
{{--                           </div>--}}
{{--                       </div>--}}
{{--                       <div class="col-md-12 col-sm-6 col-xs-6">--}}
{{--                           <div class="adv wow fadeInUp">--}}
{{--                               <img src="img/adv3.png" class="img-responsive">--}}
{{--                               <div class="adv-content3">--}}
{{--                                   <h3 class="wow fadeInUp" data-wow-delay=".2s"> <span> SALE OFF </span> 50%  </h3>--}}
{{--                                   <h2 class="wow fadeInUp"> SHOP NOW </h2>--}}
{{--                               </div>--}}
{{--                               <img src="img/arrow.png" class="arrowMore">--}}

{{--                           </div>--}}
{{--                       </div>--}}
{{--                   </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="clearfix"></div>--}}
{{--    <div class="suggested">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h3>SUGGESTED </h3>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean </p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
{{--                        <!-- Indicators -->--}}
{{--                        <ol class="carousel-indicators hidden-xs">--}}
{{--                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
{{--                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
{{--                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
{{--                        </ol>--}}

{{--                        <!-- Wrapper for slides -->--}}
{{--                        <div class="carousel-inner" role="listbox">--}}
{{--                            <div class="item active">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest1.png" alt="Image"></a></div>--}}
{{--                                    <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest2.png" alt="Image"></a></div>--}}
{{--                                    <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest3.png" alt="Image"></a></div>--}}
{{--                                </div><!--.row-->--}}
{{--                            </div><!--.item-->--}}
{{--                            <div class="item">--}}
{{--                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest1.png" alt="Image"></a></div>--}}
{{--                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest2.png" alt="Image"></a></div>--}}
{{--                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest3.png" alt="Image"></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="item">--}}
{{--                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest1.png" alt="Image"></a></div>--}}
{{--                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest2.png" alt="Image"></a></div>--}}
{{--                                <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest3.png" alt="Image"></a></div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="clearfix"></div>--}}
    @endsection


    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

        <script type="text/javascript">
            var ENDPOINT = "127.0.0.1:8000";

            $(document).ready(function() {
                console.log("ready");
                var sort_attributes = [];

                // Listen for 'change' event, so this triggers when the user clicks on the checkboxes labels
                $('select[name="sort"]').on('change', function (e) {
                    console.log("change");
                    e.preventDefault();
                    sort_attributes = []; // reset

                    // $('select[name="sort"]:checked').each(function()
                    // {
                        sort_attributes.push($(this).val());
                        console.log(sort_attributes);
                    // });
                    $.ajax({
                        url:"/products?attr=" + sort_attributes,
                        type:'get',
                        data : {
                            "sort_attributes" :sort_attributes,},
                        beforeSend: function()
                        {
                            $(".ajax-load").show();
                        }
                    })

                        .done(function(data){
                            console.log("success");
                            console.log(data);
                            if(data.html == ""){
                                $('.ajax-load').html("");
                                $("#post-data").html("");

                                return;
                            }
                            $('.ajax-load').hide();
                            $("#post-data").html("");
                            $("#post-data").append(data.html);
                        })
                        // $.get('ajax.aspx', data, success, datatype)

                        // Call back function
                        .fail(function(jqXHR,ajaxOptions,thrownError){
                            alert("Server not responding.....");
                        });

                });

            });
        </script>
    @endsection

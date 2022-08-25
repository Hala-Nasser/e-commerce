<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" >
                <div class="section-title">
                    <h3> {{$pages[1]->title}}  </h3>
                    <p>{{ $pages[1]->description }}</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-12 wow fadeInUp" >
                <h4 class="sort"> <i class="fa fa-sliders"></i> Sort by   </h4>
            </div>
            <div class="sortSection">
                <div class="col-md-9 col-sm-9 col-xs-9 col-md-offset-1 ">
                    <div class="col-md-3 col-md-offset-3 col-sm-3">
                        <ul class="nav nav-pills left">
                            <li class="dropdown active span8">
                                <a class="dropdown-toggle" id="inp_impact" data-toggle="dropdown">
                                    <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title"  class="dropdown_title">All Product </span><span class="caret"></span></a>
                                    <ul ID="divNewNotifications" class="dropdown-menu">
                                        @forelse($categories as $category)
                                            <li><a>{{$category->title}}</a></li>
                                        @empty
                                            <li><a>One</a></li>
                                            <li><a>Two</a></li>
                                            <li><a>Three</a></li>
                                        @endforelse
                                    </ul>
                            </li>
                        </ul>
                    </div>
                    @forelse($attributes as $attribute)
                    <div class="col-md-3 col-sm-3">
                        <ul class="nav nav-pills left">
                            <li class="dropdown active span8">
                                <a class="dropdown-toggle" id="inp_impact2" data-toggle="dropdown">
                                    <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title2"
                                                                                             class="dropdown_title">{{$attribute->title}}</span><span class="caret"></span></a>
                                <ul ID="divNewNotifications2" class="dropdown-menu sizes">
                                    @forelse($attribute->attributeAttributeValues as $attribute_value)
                                        @if($attribute->title_en == "color")
                                            <li><a> {{$attribute_value->value}} <label class="color1"> </label></a></li>
                                        @else
                                        <li><a><span class="small "> {{$attribute_value->value}} </span> Small </a></li>
                                        @endif
                                    @empty
                                    <li><a><span class="small "> S </span> Small </a></li>
                                    <li><a><span class="medium "> M </span> Medium </a></li>
                                    <li><a><span class="large "> L </span> Large </a></li>
                                    <li><a><span class="xlarge "> XL </span> XLarge </a></li>
                                    <li><a><span class="xxlarge "> XXL </span> XXLarge </a></li>
                                    <li><a><span class="xxxlarge "> XXXL </span> XXXLarge </a></li>
                                    @endforelse

                                </ul>
                            </li>
                        </ul>
                    </div>
                @empty
                    <div class="col-md-3 col-sm-3">
                        <ul class="nav nav-pills left">
                            <li class="dropdown active span8">
                                <a class="dropdown-toggle" id="inp_impact2" data-toggle="dropdown">
                                    <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title2"
                                        class="dropdown_title">Sizes </span><span class="caret"></span></a>
                                <ul ID="divNewNotifications2" class="dropdown-menu sizes">
                                    <li><a><span class="small "> S </span> Small </a></li>
                                    <li><a><span class="medium "> M </span> Medium </a></li>
                                    <li><a><span class="large "> L </span> Large </a></li>
                                    <li><a><span class="xlarge "> XL </span> XLarge </a></li>
                                    <li><a><span class="xxlarge "> XXL </span> XXLarge </a></li>
                                    <li><a><span class="xxxlarge "> XXXL </span> XXXLarge </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endforelse

                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            @forelse ($products as $product)
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" >
                <div class="products-card">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-cardImg p1 " style="	background: url({{ $product->image->getUrl() }}) center no-repeat;
                            background-size: cover;">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-details ">
                                <a href="{{ URL('product/singleProduct/' . $product->id) }}"><h4>{{$product->title}} </h4> </a>                                <p> {{$product->description}}  </p>
                                <div class="shipping-icon">
                                    <a href="{{ URL('shopping') }}">
                                        <img src="{{asset('web/img/shopping-cart%20(1).png')}}">
                                    </a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
               


            </div>
            @empty
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" >
                <div class="products-card">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-cardImg p3">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-details ">
                                <h4>Lorem ipsum </h4>
                                <p> Aenean commodo ligula eget dolor  </p>
                                <div class="shipping-icon">
                                    <a href="#">
                                        <img src="img/shopping-cart%20(1).png">
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>




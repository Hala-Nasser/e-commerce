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
                                <select name="sort" class="form-control" id="{{str_ireplace(' ','_',$attribute->title_en)}}_id">
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

        <div class="clearfix"></div>
        <div class="row">
            @forelse ($products as $product)
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" >
                    <div class="products-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-cardImg p1 " style="	background: url({{ $product->image->getUrl() }}) center no-repeat;
                            background-size: cover;">
                                    <form id="fav-form" action="{{ route('favorite') }}" method="POST" class="d-none">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        @if($product->productUserProductFavorites )
                                        <button><i class="fa fa-heart-o"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-details ">
                                    <a href="{{ URL('product/singleProduct/' . $product->id) }}">
                                        <h4>{{$product->title}} </h4> </a>
                                    <P>{{ $product->productUserProductFavorites }}</P>
                                    <p> {!! $product->description !!}  </p>
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
                                            <img src="{{asset('web/img/shopping-cart%20(1).png')}}">
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

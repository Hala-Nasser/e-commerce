@forelse($products as $product)
    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
        <div class="products-card">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="products-cardImg p1 ">
                        <a href="#"><i class="fa fa-heart-o"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="products-details ">
                        <h4>{{$product->title}}</h4>
                        <p> {{$product->description}}</p>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="proPrice">{{$product->price}}</h3>
                            </div>
                            <div class="col-md-6">
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

        </div>
    </div>
@empty

    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
        <div class="products-card">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="products-cardImg p1 ">
                        <a href="#"><i class="fa fa-heart-o"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="products-details ">
                        <h4>hala</h4>
                        <p> hala hala</p>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="proPrice">50</h3>
                            </div>
                            <div class="col-md-6">
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

        </div>
    </div>

@endforelse

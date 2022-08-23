@extends('web.layout.parent')

@section('style')
@endsection

@section('content')

<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div id="Carousel" class="carousel slide wow fadeInUp " style="overflow: hidden">
                    <ol class="carousel-indicators hidden-sm hidden-xs">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                        <li data-target="#Carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                        <h3> Lorem ipsum dolor sit amet </h3>
                                        <p>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                            Cum sociis natoque penatibus et magnis dis parturient monte</p>
                                        <ul>
                                            <li>
                                                <a href="#" class="btn btn-default order"> ORDER </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default more"> MORE </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                        <h3> Lorem ipsum dolor sit amet </h3>
                                        <p>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                            Cum sociis natoque penatibus et magnis dis parturient monte</p>
                                        <ul>
                                            <li>
                                                <a href="#" class="btn btn-default order"> ORDER </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default more"> MORE </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                        <h3> Lorem ipsum dolor sit amet </h3>
                                        <p>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                            Cum sociis natoque penatibus et magnis dis parturient monte</p>
                                        <ul>
                                            <li>
                                                <a href="#" class="btn btn-default order"> ORDER </a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn btn-default more"> MORE </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                    </div>
                    <!--.carousel-inner-->

                </div>
                <!--.Carousel-->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <img src="{{ asset('web/img/mainBg.png ') }}" class="mainBg img-responsive wow animated fadeInUp">
            </div>
        </div>
    </div>
</div>
<div class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-5 col-xs-12 wow fadeInUp">
                <div class="section-title">
                    <h3> OUR FEATURES </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia enim eu velit
                        condimentum auctor. Nullam mi dui, tincidunt et sapien quis, consectetur rutrum ante.</p>

                </div>
            </div>
            <div class="col-md-5 col-sm-7 col-md-offset-1 col-xs-12 wow fadeInUp ">
                <div class="features-icon">
                    <img class="devider hidden-xs " src="img/featuresDevider.png">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="featureContent">
                                <img src="img/f1.png">
                                <h4> 24 Hr SUPPORT </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="featureContent">
                                <img src="img/currency--1-.png">
                                <h4> MONEY BACK </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="featureContent">
                                <img src="img/gift.png">
                                <h4> SURPRICE GIFT </h4>
                            </div>


                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="featureContent">
                                <img src="img/checked.png">
                                <h4> UNIQUE DESIGN </h4>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="section-title">
                    <h3> PRODUCTS </h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean </p>
                </div>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-12 wow fadeInUp">
                <h4 class="sort"> <i class="fa fa-sliders"></i> Sort by </h4>
            </div>
            <div class="sortSection">
                <div class="col-md-9 col-sm-9 col-xs-9 col-md-offset-1 ">
                    <div class="col-md-3 col-md-offset-3 col-sm-3">
                        <ul class="nav nav-pills left">
                            <li class="dropdown active span8">
                                <a class="dropdown-toggle" id="inp_impact" data-toggle="dropdown">
                                    <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title"
                                        class="dropdown_title">All Product </span><span class="caret"></span></a>
                                <ul ID="divNewNotifications" class="dropdown-menu">
                                    <li><a>One</a></li>
                                    <li><a>Two</a></li>
                                    <li><a>Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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

                    <div class="col-md-3 col-sm-3">
                        <ul class="nav nav-pills left">
                            <li class="dropdown active span8">
                                <a class="dropdown-toggle" id="inp_impact3" data-toggle="dropdown">
                                    <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title3"
                                        class="dropdown_title">Colors </span><span class="caret"></span></a>
                                <ul ID="divNewNotifications3" class="dropdown-menu colors">
                                    <li><a> Red <label class="color1"> </label></a></li>
                                    <li><a> Red <label class="color2"> </label></a></li>
                                    <li><a> Red <label class="color3"> </label></a></li>
                                    <li><a> Red <label class="color4"> </label></a></li>
                                    <li><a> Red <label class="color5"> </label></a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wow fadeInUp">
                <div class="products-card">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-cardImg p1 ">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-details ">
                                <h4>Lorem ipsum </h4>
                                <p> Aenean commodo ligula eget dolor </p>
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
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wow fadeInUp">
                <div class="products-card">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-cardImg p2">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-details ">
                                <h4>Lorem ipsum </h4>
                                <p> Aenean commodo ligula eget dolor </p>
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

        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wow fadeInUp">
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
                                <p> Aenean commodo ligula eget dolor </p>
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
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 wow fadeInUp">
                <div class="products-card">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-cardImg p4 ">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="products-details ">
                                <h4>Lorem ipsum </h4>
                                <p> Aenean commodo ligula eget dolor </p>
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

        </div>
    </div>

</div>
<div class="clearfix"></div>
<div class="arrived">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                <div class="section-title arrivedText">
                    <h3> JUST ARRIVED ! </h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean </p>
                </div>
                <img src="img/arrived/arrivedNum.png" alt="arrived " title="just arrived" class="img-responsive">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="space-100 hidden-xs"></div>
                <div class="arrived-right wow slideInRight" data-wow-duration="2s" data-wow-delay=".3s">
                    <div class="row">
                        <div class="col-md-7 col-sm-6 left-side">
                            <h1> 30$ </h1>
                            <h3> Lorem ipsum </h3>
                            <a href="#">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </a>
                            <h4>Lorem ipsum dolor sit ame
                                consectetuer adipiscing </h4>
                            <a href="#" class="btn btn-primary"> ORDER </a>
                        </div>
                        <div class="col-md-5  col-sm-6 right-side hidden-xs ">
                            <img src="img/arrived/arrivedImg.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="suggested">
    <div class="container">
        <div class="section-title wow fadeInUp">
            <h3>SUGGESTED </h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide wow slideInRight" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-4"><a href="#" class="img-responsive"><img
                                            src="img/suggest/suggest1.png" alt="Image"></a></div>
                                <div class="col-md-4"><a href="#" class="img-responsive"><img
                                            src="img/suggest/suggest2.png" alt="Image"></a></div>
                                <div class="col-md-4"><a href="#" class="img-responsive"><img
                                            src="img/suggest/suggest3.png" alt="Image"></a></div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                        <div class="item">
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest1.png"
                                        alt="Image"></a></div>
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest2.png"
                                        alt="Image"></a></div>
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest3.png"
                                        alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest1.png"
                                        alt="Image"></a></div>
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest2.png"
                                        alt="Image"></a></div>
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="img/suggest/suggest3.png"
                                        alt="Image"></a></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection

@section('script')
@endsection
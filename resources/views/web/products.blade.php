
@extends('web.layout.parent')

@section('style')
@endsection

@section('content')

    <div class="page-title text-center">
        <ol class="breadcrumb">
            <li><a href="#">Products </a></li>
            <li><a href="#">home </a></li>
        </ol>
    </div>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title wow fadeInUp">
                        <h3> PRODUCTS  </h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean </p>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInUp">
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
                                        <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title2" class="dropdown_title">Sizes  </span><span class="caret"></span></a>
                                    <ul ID="divNewNotifications2" class="dropdown-menu sizes">
                                        <li><a><span class="small "> S </span> Small </a></li>
                                        <li><a><span class="medium "> M </span> Medium  </a></li>
                                        <li><a><span class="large "> L </span> Large  </a></li>
                                        <li><a><span class="xlarge "> XL  </span> XLarge  </a></li>
                                        <li><a><span class="xxlarge "> XXL  </span> XXLarge  </a></li>
                                        <li><a><span class="xxxlarge "> XXXL  </span> XXXLarge  </a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <ul class="nav nav-pills left">
                                <li class="dropdown active span8">
                                    <a class="dropdown-toggle" id="inp_impact3" data-toggle="dropdown">
                                        <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title3" class="dropdown_title">Colors </span><span class="caret"></span></a>
                                    <ul ID="divNewNotifications3" class="dropdown-menu colors">
                                        <li><a> Red  <label class="color1"> </label></a></li>
                                        <li><a> Red  <label class="color2"> </label></a></li>
                                        <li><a> Red  <label class="color3"> </label></a></li>
                                        <li><a> Red  <label class="color4"> </label></a></li>
                                        <li><a> Red  <label class="color5"> </label></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <h4 class="categoryName"> Dresses </h4>
                </div>
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
                                    <h4>Lorem ipsum </h4>
                                    <p> Aenean commodo ligula eget dolor  </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="proPrice"> 100 $ </h3>
                                        </div>
                                        <div class="col-md-6">
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
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
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
                                    <p> Aenean commodo ligula eget dolor  </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="proPrice"> 100 $ </h3>
                                        </div>
                                        <div class="col-md-6">
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
            <div class="row wow fadeInUp">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="products-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-cardImg p3 ">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-details ">
                                    <h4>Lorem ipsum </h4>
                                    <p> Aenean commodo ligula eget dolor  </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="proPrice"> 100 $ </h3>
                                        </div>
                                        <div class="col-md-6">
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
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="products-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-cardImg p4">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-details ">
                                    <h4>Lorem ipsum </h4>
                                    <p> Aenean commodo ligula eget dolor  </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="proPrice"> 100 $ </h3>
                                        </div>
                                        <div class="col-md-6">
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
            <div class="row wow fadeInUp">
                <div class="col-md-12" style="margin-top: 50px;">
                    <h4 class="categoryName"> T-SHIRT </h4>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="products-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-cardImg p5">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-details ">
                                    <h4>Lorem ipsum </h4>
                                    <p> Aenean commodo ligula eget dolor  </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="proPrice"> 100 $ </h3>
                                        </div>
                                        <div class="col-md-6">
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
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="products-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-cardImg p6 ">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="products-details ">
                                    <h4>Lorem ipsum </h4>
                                    <p> Aenean commodo ligula eget dolor  </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="proPrice"> 100 $ </h3>
                                        </div>
                                        <div class="col-md-6">
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
            <div class="row loading">
                <a href="#" style="color: #f689a5">
                    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                    <span class="sr-only">Loading...</span>
                </a>
            </div>
        </div>
    </div>

    <div class="products-adv">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 ">
                    <div class="adv wow fadeInUp">
                        <img src="img/adv1.png" class="topAdv">
                        <div class="adv-content">
                            <h3 class="wow fadeInUp" data-wow-delay=".2s"> Hello Summer </h3>
                            <button type="submit" class="btn btn-default wow slideInUp" data-wow-delay=".2s">order</button>
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                   <div class="row">
                       <div class="col-md-12 col-sm-6 col-xs-6">
                           <div class="adv  wow fadeInUp">
                               <img src="img/adv2.png " class="img-responsive">
                               <div class="adv-content2">
                                   <h3 class="wow fadeInUp" data-wow-delay=".2s"> polo shirt  </h3>

                               </div>
                               <img src="img/arrow.png" class="arrowMore">
                           </div>
                       </div>
                       <div class="col-md-12 col-sm-6 col-xs-6">
                           <div class="adv wow fadeInUp">
                               <img src="img/adv3.png" class="img-responsive">
                               <div class="adv-content3">
                                   <h3 class="wow fadeInUp" data-wow-delay=".2s"> <span> SALE OFF </span> 50%  </h3>
                                   <h2 class="wow fadeInUp"> SHOP NOW </h2>
                               </div>
                               <img src="img/arrow.png" class="arrowMore">

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
            <div class="section-title">
                <h3>SUGGESTED </h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
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
    @endsection
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
                                        <h3> {{$pages[2]->title}}</h3>
                                        <p>{{$pages[2]->description}}</p>
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
                                        <h3> {{$pages[3]->title}}</h3>
                                        <p>{{$pages[3]->description}}</p>
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
                                        <h3> {{$pages[4]->title}}</h3>
                                        <p>{{$pages[4]->description}}</p>
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
                    <h3>{{$pages[5]->with('pageItems')->find(6)->title}}</h3>
                    <p>{{$pages[5]->with('pageItems')->find(6)->description}}</p>

                </div>
            </div>
            <div class="col-md-5 col-sm-7 col-md-offset-1 col-xs-12 wow fadeInUp ">
                <div class="features-icon">
                    <img class="devider hidden-xs " src="{{asset('web/img/featuresDevider.png')}}">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="featureContent">
                                @if($pages[5]->with('pageItems')->find(6)->pageItems[0] == null)
                                    <img src="{{asset('web/img/f1.png')}}">
                                @else
                                    @if($pages[5]->with('pageItems')->find(6)->pageItems[0]->image == null)
                                        <img src="{{asset('web/img/f1.png')}}">
                                    @else
                                        <img src="{{ $pages[5]->with('pageItems')->find(6)->pageItems[0]->image->getUrl()}}">
                                    @endif
                                @endif
                                <h4> {{$pages[5]->with('pageItems')->find(6)->pageItems[0]->title}} </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="featureContent">
                                @if($pages[5]->with('pageItems')->find(6)->pageItems[1] == null)
                                    <img src="{{asset('web/img/currency--1-.png')}}">
                                @else
                                    @if($pages[5]->with('pageItems')->find(6)->pageItems[1]->image == null)
                                        <img src="{{asset('web/img/currency--1-.png')}}">
                                    @else
                                    <img src="{{ $pages[5]->with('pageItems')->find(6)->pageItems[1]->image->getUrl()}}">
                                    @endif
                                @endif
                                <h4> {{$pages[5]->with('pageItems')->find(6)->pageItems[1]->title}} </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="featureContent">
                                @if($pages[5]->with('pageItems')->find(6)->pageItems[2] == null)
                                    <img src="{{asset('web/img/gift.png')}}">
                                @else
                                    @if($pages[5]->with('pageItems')->find(6)->pageItems[2]->image == null)
                                        <img src="{{asset('web/img/gift.png')}}">
                                    @else
                                        <img src="{{ $pages[5]->with('pageItems')->find(6)->pageItems[2]->image->getUrl()}}">
                                    @endif
                                @endif
                                <h4> {{$pages[5]->with('pageItems')->find(6)->pageItems[2]->title}} </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="featureContent">
                                @if($pages[5]->with('pageItems')->find(6)->pageItems[3] == null)
                                    <img src="{{asset('web/img/checked.png')}}">
                                @else
                                    @if($pages[5]->with('pageItems')->find(6)->pageItems[3]->image == null)
                                        <img src="{{asset('web/img/checked.png')}}">
                                    @else
                                        <img src="{{ $pages[5]->with('pageItems')->find(6)->pageItems[3]->image->getUrl()}}">
                                    @endif
                                @endif
                                <h4> {{$pages[5]->with('pageItems')->find(6)->pageItems[3]->title}} </h4>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('web.indexproduct')

                  
<div class="clearfix"></div>
<div class="arrived">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                <div class="section-title arrivedText">
                    <h3> {{$pages[6]->title}}</h3>
                    <p>{{ $pages[6]->description }}</p>
                </div>
                @if($pages[6] == null)
                    <img src="{{asset('web/img/arrived/arrivedNum.png')}}" alt="arrived " title="just arrived" class="img-responsive">
                @else
                    @if($pages[6]->image == null)
                        <img src="{{asset('web/img/arrived/arrivedNum.png')}}" alt="arrived " title="just arrived" class="img-responsive">
                    @else
                        <img src="{{ $pages[6]->image->getUrl() }}" class="img-responsive">
                    @endif
                @endif

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
                            <img src="{{asset('web/img/arrived/arrivedImg.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>


@include('web.suggested')


@endsection

@section('script')
@endsection

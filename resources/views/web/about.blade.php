
@extends('web.layout.parent')

@section('style')
@endsection

@section('content')
    <div class="page-title text-center">
        <ol class="breadcrumb">
            <li><a href="#">{{$about->title}}</a></li>
            <li><a href="#"> home </a></li>
        </ol>
    </div>
    <div class="clearfix"></div>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="img/aboutImg.png" class="img-responsive">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                        {!! $about->description !!}
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="style">
        <div class="container">
            <h4 class="hidden-xs hidden-sm"> ،، </h4>

            <h3> Style is a way to say who you are without having to speak </h3>
        </div>

    </div>
</div>

@endsection


@section('script')
@endsection
 
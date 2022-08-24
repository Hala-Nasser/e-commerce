@extends('web.layout.parent')

@section('style')
@endsection

@section('content')
    <div class="page-title text-center">
        <ol class="breadcrumb">
            @if($about == null)
                <li><a href="#">@lang('dummy-data.about-title')</a></li>
            @else
                <li><a href="#">{{$about->title}}</a></li>
            @endif

            <li><a href="{{ URL('index') }}"> home </a></li>
        </ol>
    </div>
    <div class="clearfix"></div>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    @if($about == null)
                        <img src="{{asset('web/img/aboutImg.png')}}" class="img-responsive">
                    @else
                        @if($about->image == null)
                            <img src="{{asset('web/img/aboutImg.png')}}" class="img-responsive">
                        @else
                            <img src="{{ $about->image->getUrl() }}" class="img-responsive">
                        @endif
                    @endif
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-content">

                        @if($about == null)
                            @lang('dummy-data.about-description')
                        @else
                            {!! $about->description !!}
                        @endif

                    </div>

                </div>

            </div>
        </div>

    </div>
    {{--@if($about == null)--}}
    {{--<div class="style" style="background: url({{asset('web/img/styleVector.png')}}) no-repeat right 10px,#f5f5f5;">--}}
    {{--    @else--}}
    {{--    @if($about->pageItems[0] == null)--}}
    {{--    <div class="style" style="background: url({{asset('web/img/styleVector.png')}}) no-repeat right 10px,#f5f5f5;">--}}
    {{--        @else--}}
    @if($about->pageItems[0]->image == null)
        <div class="style" style="background: url({{asset('web/img/styleVector.png')}}) no-repeat right 10px,#f5f5f5;">
            @else
                <div class="style"
                     style="background: url({{ $about->pageItems[0]->image->getUrl() }}) no-repeat right 10px,#f5f5f5;">
                    {{--                @else--}}
                    {{--                <img src="{{ $about->image->getUrl() }}" class="img-responsive">--}}
                    @endif
                    {{--                @endif--}}
                    {{--                @endif--}}

                    <div class="container">
                        <h4 class="hidden-xs hidden-sm"> ،، </h4>

                        <h3> {{$about->pageItems[0]->title}}</h3>
                    </div>

                </div>
        </div>

        @endsection


        @section('script')
        @endsection

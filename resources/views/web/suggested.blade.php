<div class="suggested">
    <div class="container">
        <div class="section-title wow fadeInUp">
            <h3> {{$pages[7]->title}}</h3>
            <p>{{ $pages[7]->description }}</p>
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
                     @forelse ($products as $product )

                        <div class="item active">
                            <div class="row">
                                <div class="col-md-4"><a href="{{ URL('product/singleProduct/' . $product->id) }}" class="img-responsive"><img
                                            src="{{ $product->image->getUrl() }}" alt="Image"></a></div>
                                {{-- <div class="col-md-4"><a href="{{ URL('product/singleProduct/' . $product->id) }}" class="img-responsive"><img
                                            src="{{ $product->image->getUrl() }}" alt="Image"></a></div>
                                <div class="col-md-4"><a href="{{ URL('product/singleProduct/' . $product->id) }}" class="img-responsive"><img
                                            src="{{ $product->image->getUrl() }}" alt="Image"></a></div> --}}
                             </div>
                         </div>
                            
                        @empty
                        <div class="row">
                            <div class="col-md-12">
                                <div id="carousel-example-generic" class="carousel slide wow slideInRight" data-ride="carousel">
                                    <!-- Indicators -->
                                    {{-- <ol class="carousel-indicators hidden-xs">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>
             --}}
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
            
                            
                        @endforelse

                        {{-- <div class="item active">
                            <div class="row">
                                <div class="col-md-4"><a href="{{ URL('product/singleProduct/' . $product->id) }}" class="img-responsive"><img
                                            src="{{ $product->image->getUrl() }}" alt="Image"></a></div> --}}
                                {{-- <div class="col-md-4"><a href="#" class="img-responsive"><img
                                            src="{{asset('web/img/suggest/suggest2.png')}}" alt="Image"></a></div>
                                <div class="col-md-4"><a href="#" class="img-responsive"><img
                                            src="{{asset('web/img/suggest/suggest3.png')}}" alt="Image"></a></div> --}}
                            {{-- </div> --}}
                            <!--.row-->
                        {{-- </div> --}}
                        <!--.item-->
                        {{-- <div class="item">
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="{{asset('web/img/suggest/suggest1.png')}}"
                                        alt="Image"></a></div>
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="{{asset('web/img/suggest/suggest2.png')}}"
                                        alt="Image"></a></div>
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="{{asset('web/img/suggest/suggest3.png')}}"
                                        alt="Image"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="{{asset('web/img/suggest/suggest1.png')}}"
                                        alt="Image"></a></div>
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="{{asset('web/img/suggest/suggest2.png')}}"
                                        alt="Image"></a></div>
                            <div class="col-md-4"><a href="#" class="img-responsive"><img src="{{asset('web/img/suggest/suggest3.png')}}"
                                        alt="Image"></a></div>
                        </div> --}}

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

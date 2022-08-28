<div class="suggested">
    <div class="container">
        <div class="section-title wow fadeInUp" >
            <h3> {{$pages[7]->title}}</h3>
            <p>{{ $pages[7]->description }}</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide wow slideInRight" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        @foreach($latestproducts->chunk(3) as $three)
                        @if ($loop->index == 0)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$loop->index}}" class="active"></li>
                        @else
                        <li data-target="#carousel-example-generic" data-slide-to="{{$loop->index}}"></li>
                        @endif
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        @foreach($latestproducts->chunk(3) as $three)
                        @if ($loop->index == 0)
                        <div class="item active">
                            <div class="row">
                                @foreach($three as $product)
                                <div class="col-md-4"><a href="{{ URL('product/singleProduct/' . $product->id) }}" class="img-responsive"><img
                                    src="{{ $product->image->getUrl() }}" alt="Image"></a></div> 
                                @endforeach
                            </div><!--.row-->
                        </div><!--.item-->
                        @else
                        <div class="item">
                            @foreach($three as $product)
                            <div class="col-md-4"><a href="{{ URL('product/singleProduct/' . $product->id) }}" class="img-responsive"><img
                                src="{{ $product->image->getUrl() }}" alt="Image"></a></div> 
                            @endforeach
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
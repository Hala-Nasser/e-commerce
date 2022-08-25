<div class="footer">
    <div class="container">
        <div class="newsletter">
            <form class="form-inline">
                <div class="form-group">
                    <label for="email">NEWSLETTER  </label>
                    <input type="email" class="form-control" id="email">
                </div>
                <button type="submit" class="btn btn-default">SEND</button>
            </form>
        </div>
        <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i> </a>
            <a href="#"><i class="fa fa-twitter"></i> </a>
            <a href="#"><i class="fa fa-dribbble"></i> </a>
            <a href="#"><i class="fa fa-instagram"></i> </a>
        </div>
        <div class="page-links">
            <ul>
                <li><a href="{{ URL('index') }}">home</a></li>
                <li><a href="{{ URL('about') }}">about</a></li>
                {{-- <li><a href="designers.html">designers</a></li> --}}
                <li><a href="{{ URL('products') }}">products</a></li>
                <li><a href="{{ URL('contact') }}">contact us </a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="{{asset('web/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/loginModal.js')}}"></script>

<script type="text/javascript" src="{{asset('web/js/bootstrap.js')}}"></script>

<script type="text/javascript" src="{{asset('web/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/wow.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/index.js')}}"></script>

@yield('script')


</body>
</html>

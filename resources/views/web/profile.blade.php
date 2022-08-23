@extends('web.layout.parent')

@section('style')
@endsection

@section('content')

    <div class="page-title text-center">
        <ol class="breadcrumb">
            <li><a href="#">Profile  </a></li>
            <li><a href="#">home </a></li>
        </ol>
    </div>
    <div class="clearfix"></div>
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="profile-card">
                        <img src="img/userProfile.png" class="img-responsive">
                        <div class="profile-details">
                            <h3> Sam john </h3>
                            <p> <i class="fa fa-map-marker"></i> Palestine  </p>
                            <div class="rating">
                                <a href="#"> <i class="fa fa-star"></i> </a>
                                <a href="#"> <i class="fa fa-star"></i> </a>
                                <a href="#"> <i class="fa fa-star"></i> </a>
                                <a href="#"> <i class="fa fa-star-o"></i> </a>
                            </div>
                            <div class="line">
                            </div>
                            <p class="details"> Vivamus elementum semper nisian vulputate eleifend tellus Aenean leo ligula, porttitor euquat vitae, eleifend ac, enim</p>
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td> Followers </td>
                                        <td> 23 </td>
                                    </tr>
                                    <tr>
                                        <td> Following </td>
                                        <td> 23 </td>
                                    </tr>
                                    <tr>
                                        <td> Products </td>
                                        <td> 23 </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="social-links">
                                <ul>
                                    <li> <a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                    <li> <a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-6 col-xs-12">
                    <a href="addProduct.html" class="btn btn-primary pull-right">New Product <i class="fa fa-plus"></i> </a>

                    <div class="profile-content">
                        <video width="100%" controls>
                            <source src="video.mp4" type="video/mp4">
                            <source src="video.mp4" type="video/ogg">
                            Your browser does not support HTML5 video.
                        </video>
                        <h3> products </h3>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="thumbnail">

                                    <img src="img/profile/profile1.png" alt="design1">

                                    <div class="caption">
                                        <a href="" class="desName"> Elegant tshirts </a>
                                        <a href="#" class="desShow pull-right"> <i class="fa fa-eye"></i> 12 </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="img/profile/profile2.png" alt="design1">
                                    <div class="caption">
                                        <a href="" class="desName"> Elegant tshirts </a>
                                        <a href="#" class="desShow pull-right"> <i class="fa fa-eye"></i> 12 </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="img/profile/profile3.png" alt="design1">
                                    <div class="caption">
                                        <a href="" class="desName"> Elegant tshirts </a>
                                        <a href="#" class="desShow pull-right"> <i class="fa fa-eye"></i> 12 </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="img/profile/profile4.png" alt="design1">
                                    <div class="caption">
                                        <a href="" class="desName"> Elegant tshirts </a>
                                        <a href="#" class="desShow pull-right"> <i class="fa fa-eye"></i> 12 </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="img/profile/profile5.png" alt="design1">
                                    <div class="caption">
                                        <a href="" class="desName"> Elegant tshirts </a>
                                        <a href="#" class="desShow pull-right"> <i class="fa fa-eye"></i> 12 </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <img src="img/profile/profile6.png" alt="design1">
                                    <div class="caption">
                                        <a href="" class="desName"> Elegant tshirts </a>
                                        <a href="#" class="desShow pull-right"> <i class="fa fa-eye"></i> 12 </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


    @section('script')
    <script>
        $(document).ready(function(){
            $('#characterLeft').text('140 characters left');
            $('#message').keydown(function () {
                var max = 140;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#characterLeft').text('You have reached the limit');
                    $('#characterLeft').addClass('red');
                    $('#btnSubmit').addClass('disabled');
                }
                else {
                    var ch = max - len;
                    $('#characterLeft').text(ch + ' characters left');
                    $('#btnSubmit').removeClass('disabled');
                    $('#characterLeft').removeClass('red');
                }
            });
        });
    
    </script>
    
    @endsection
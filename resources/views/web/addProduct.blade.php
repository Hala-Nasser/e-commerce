@extends('web.layout.parent')

@section('style')
<link href="{{asset('web/css/jquery.growl.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('web/css/fileup.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="page-title text-center">
        <ol class="breadcrumb">
            <li><a href="#">Add Product   </a></li>
            <li><a href="{{ URL('index') }}">home </a></li>
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
                    <div class="addProduct">
                        <div class="row">
                            <div class="col-md-8">
                                <label> Product Name </label>

                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="...">
                                </div><!-- /input-group -->
                            </div>
                            <div class="col-md-4">
                                <label> Price </label>

                                <div class="input-group">
                                    <input type="text" class="form-control price">
                                    <span class="input-group-addon">$</span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-12">
                                <label> DESCRIPTION  </label>

                                <div class="input-group">
                                    <textarea rows="8" class="form-control"></textarea>

                                </div><!-- /input-group -->
                            </div>
                        </div>
                        <div class="sortSection">
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-md-5">
                                    <label> Sizes  </label>
                                    <ul class="nav nav-pills left">
                                        <li class="dropdown active span8">
                                            <a class="dropdown-toggle" id="inp_impact1" data-toggle="dropdown">
                                                <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title1" class="dropdown_title">Choose Sizes  </span><span class="caret"></span></a>
                                            <ul ID="divNewNotifications1" class="dropdown-menu sizes">
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
                                <div class="col-md-7">
                                    <label> Sizes  </label>
                                    <ul class="nav nav-pills left">
                                        <li class="dropdown active span8">
                                            <a class="dropdown-toggle" id="inp_impact3" data-toggle="dropdown">
                                                <i class="icon icon-envelope icon-white"></i>&nbsp;<span id="dropdown_title3" class="dropdown_title">Choose Colors </span><span class="caret"></span></a>
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
                        <div class="row" style="margin-top: 50px;">
                           <div class="col-md-12">
                               <form id="multiple">
                                   <div class="row">
                                      <div class="col-md-12">
                                          <label> PHOTOS  </label>
                                      </div>
                                       <div class="col-md-6">

                                           <a type="button" class="fileup-btn">
                                               <img src="img/upload.png">
                                               <input type="file" id="upload-2" multiple>
                                               <h3> UPLOAD </h3>
                                           </a>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="fileDetail">
                                               <a class="control-button btn cancel" style="display: none"
                                                  href="javascript:$.fileup('upload-2', 'remove', '*')">Delete all  </a>
                                               <a class="control-button btn btn-primary" style="display: none"
                                                  href="javascript:$.fileup('upload-2', 'upload', '*')">Upload  </a>
                                               <div id="upload-2-queue" class="queue"></div>
                                           </div>
                                       </div>
                                   </div>

                               </form>
                           </div>

                        </div>
                        <div class="row" style="margin-top: 50px;">
                            <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                            <label for="styled-checkbox-1" class="term">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                Aenean commodo ligula eget dolor. Aenean massa.</label>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <button class="bbtn btn-primary"> Done </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection


    @section('script')
    <script src="{{asset('web/js/jquery.growl.js')}}"></script>
<script src="{{asset('web/js/fileup.js')}}"></script>

    @endsection

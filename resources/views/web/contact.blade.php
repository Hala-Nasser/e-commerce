@extends('web.layout.parent')

@section('style')
@endsection

@section('content')
    <div class="page-title text-center">
        <ol class="breadcrumb">
            <li><a href="#">Contact </a></li>
            <li><a href="#">home </a></li>
        </ol>
    </div>
    <div class="clearfix"></div>
    <div class="contact">
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-md-offset-3"><div class="form-area">
                   <form role="form" class="wow fadeInUp">
                       <br style="clear:both">
                       <h3>Contact us </h3>
                       <p> penatibus et magnis dis parturient montes, </p>
                       <img src="img/devider.png" class="img-responsive" style="margin-bottom: 15px;">
                       <div class="form-group">
                           <label for="name"> Name </label>
                           <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                       </div>
                       <div class="form-group">
                           <label for="name">Email  </label>

                           <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                       </div>
                       <div class="form-group">
                           <label for="name"> Subject </label>

                           <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                       </div>
                       <div class="form-group">
                           <label for="name"> Message </label>

                           <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                           <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                       </div>

                       <button type="button" id="submit" name="submit" class="btn btn-default pull-left">Send</button>
                   </form>
               </div></div>
           </div>
       </div>
    </div>

    @endsection


    @section('script')
    @endsection
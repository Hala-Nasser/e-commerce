@extends('web.layout.parent')

@section('style')
@endsection

@section('content')
    <div class="page-title text-center">
        <ol class="breadcrumb">
            <li><a href="#">{{$contact->title}}</a></li>
            <li><a href="{{ URL('index') }}">home </a></li>
        </ol>
    </div>
    <div class="clearfix"></div>
    @if($contact->image == null)
        <div class="contact" style="background: url({{asset('web/img/contactBg.png')}}) no-repeat; background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;
    padding: 30px 0;">
            @else
                <div class="contact" style="background: url({{ $contact->image->getUrl() }}) no-repeat; background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;
    padding: 30px 0;">

            @endif

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-area">
                                <form role="form" class="wow fadeInUp" id="SubmitForm">
                                    @csrf
                                    <br style="clear:both">
                                    <h3>{{$contact->title}}</h3>
                                    <p>{{$contact->description}}</p>
                                    <img src="{{asset('web/img/devider.png')}}" class="img-responsive"
                                         style="margin-bottom: 15px;">
                                    <div class="form-group">
                                        <label for="name"> Name </label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="name"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Email </label>

                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="Email"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Subject </label>

                                        <input type="text" class="form-control" id="subject" name="subject"
                                               placeholder="Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Message </label>

                                        <textarea class="form-control" type="textarea" id="message"
                                                  placeholder="Message"
                                                  maxlength="140" rows="7"></textarea>
                                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                                    </div>

                                    <button type="submit" id="submit" name="submit" class="btn btn-default pull-left">
                                        Send
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        @endsection


        @section('script')

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

            <script type="text/javascript">

                $('#SubmitForm').on('submit', function (e) {
                    e.preventDefault();

                    let name = $('#name').val();
                    let email = $('#email').val();
                    let subject = $('#subject').val();
                    let message = $('#message').val();

                    $.ajax({
                        url: "/contact/store",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            name: name,
                            email: email,
                            subject: subject,
                            message: message,
                        },
                        success: function (response) {
                            $('#successMsg').show();
                            console.log(response);
                            document.getElementById('name').value = '';
                            document.getElementById('email').value = '';
                            document.getElementById('subject').value = '';
                            document.getElementById('message').value = '';
                        },
                        error: function (response) {
                            $('#nameErrorMsg').text(response.responseJSON.errors.name);
                            $('#emailErrorMsg').text(response.responseJSON.errors.email);
                            $('#subjectErrorMsg').text(response.responseJSON.errors.subject);
                            $('#messageErrorMsg').text(response.responseJSON.errors.message);
                        },
                        failure: function(errMsg) {
                            console.log(errMsg);
                        }
                    });
                });
            </script>

        @endsection

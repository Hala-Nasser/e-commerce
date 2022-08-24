@extends('web.layout.parent')

@section('style')
@endsection

@section('content')

    <div class="page-title text-center">
        <ol class="breadcrumb">
            <li><a href="#">Shopping Card  </a></li>
            <li><a href="{{ URL('index') }}">home </a></li>
        </ol>
    </div>
    <div class="clearfix"></div>

    <div class="shopping-card">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <h4> My Cart </h4>
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                    <span class="round-tab"> 1
                                    </span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled">
                                    <h4> Delivery Details  </h4>

                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                        <span class="round-tab">2</span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <h4> Credit Card   </h4>

                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                        <span class="round-tab"> 3</span>
                                    </a>
                                </li>

                                <li role="presentation" class="disabled">
                                    <h4> Done  </h4>

                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                        <span class="round-tab"> 4</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="cart-content">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 ">
                                                    <div class="pro-details">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 ">
                                                                <img src="img/tshirt.png" class="img-responsive">
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 ">
                                                                <h3 class="prod-name">Tshirt  </h3>
                                                                <p> vivamus elementum </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="9" step="1" value="1">
                                                    </div>

                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <h3 class="price">
                                                        1000 $
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="cart-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="pro-details">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <img src="img/tshirt.png" class="img-responsive">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h3 class="prod-name">Tshirt  </h3>
                                                                <p> vivamus elementum </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="9" step="1" value="1">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <h3 class="price">
                                                        1000 $
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="cart-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="pro-details">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <img src="img/tshirt.png" class="img-responsive">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h3 class="prod-name">Tshirt  </h3>
                                                                <p> vivamus elementum </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="9" step="1" value="1">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <h3 class="price">
                                                        1000 $
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-10 col-md-offset-2">
                                        <div class="total">
                                            <div class="row">
                                                <div class="col-md-6  col-md-offset-6">
                                                    <h3> Total </h3>
                                                    <h3> 3000 $ </h3>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-md-offset-5">
                                        <a href="#" class="next-step pull-right"> Next <img src="img/arrow.png"> </a>

                                    </div>

                                </div>


                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="delivery-details">
                                            <form role="form">
                                                <br style="clear:both">
                                                <div class="form-group">
                                                    <label for="name"> Name </label>
                                                    <input type="text" class="form-control" id="name" name="name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Email  </label>

                                                    <input type="text" class="form-control" id="email" name="email"  required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"> address </label>
                                                    <input type="text" class="form-control" id="address" name="address"  required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="name"> Country  </label>
                                                            <select >
                                                                <option value="0"> palestine</option>
                                                                <option value="1"> palestine</option>
                                                                <option value="2"> palestine</option>
                                                                <option value="3"> palestine</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name"> city  </label>
                                                            <input type="text" class="form-control" id="city" name="address" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"> zip / postal code  </label>
                                                    <input type="text" class="form-control" id="zip" name="zip"  required>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-md-offset-5">
                                        <a href="#" class="next-step pull-right"> Next <img src="img/arrow.png"> </a>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="delivery-details">
                                            <form role="form">
                                                <br style="clear:both">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="caard">
                                                            <input type="radio" id="radio1" name="radio-group" checked>
                                                            <label for="radio1">PayPal</label>
                                                            <p> PayPal is the faster, safer way to send money, make an online payment, receive money. Account not needed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="img/paypal.png" class="img-responsive">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="paypal">
                                                            <input type="radio" id="radio2" name="radio-group" checked>
                                                            <label for="radio2">Credit Card </label>
                                                            <p> PayPal is the faster, safer way to send money, make an online payment, receive money. Account not needed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="img/Cards.png" class="img-responsive">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="name"> CREDIT CARD NUMBER  </label>
                                                    <input type="text" class="form-control" id="CARD" name="address"  required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="name"> CVV CODE  </label>
                                                            <input type="text" class="form-control" id="CVV CODE"required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="name"> EXPIRY DATE</label>
                                                            <input type="date" class="form-control" id="EXPIRY DATE " required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">NAME ON CARD  </label>
                                                    <input type="text" class="form-control" id="NAMECARD"required>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="bbtn btn-primary"> Done </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-5">
                                        <a href="#" class="next-step pull-right"> Next <img src="img/arrow.png"> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="delivery-details forth-step">
                                            <img src="img/done.png" class="img-responsive">
                                            <h4> You're almost there !  </h4>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="clearfix"></div>
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
    <script>$(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

    </script>
    <script>
        jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
        jQuery('.quantity').each(function() {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });
    </script>

    @endsection

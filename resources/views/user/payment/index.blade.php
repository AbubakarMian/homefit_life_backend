@extends('user.layouts.dasboard')

<link href="{{asset('css/payment.css')}}" rel="stylesheet">

@section('dashboard')
<section>
    <div class="innerPageBlank">
        <div class=" paymentArea">
            <div class="clearfix"></div>
            <div class="col-sm-6">
                <div class="vc">
                    <!-- Virtual Card Starts Here -->
                    <div class="center card_">
                        <div class="card_-display">
                            <div class="card_-box-inner">
                                <div class="card_-box-front">
                                    <div class="chip"></div>
                                    <div class="card_number">
                                        <div class="part-1"></div>
                                        <div class="part-2"></div>
                                        <div class="part-3"></div>
                                        <div class="part-4"></div>
                                    </div>
                                    <div class="account-holder-name"></div>
                                    <div class="expiry">
                                        <div class="month"></div>
                                        <div>/</div>
                                        <div class="year"></div>
                                    </div>
                                </div>
                                <div class="card_-box-back">
                                    <div class="plate"></div>
                                    <div class="cvv">
                                        <div class="code"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">


                            @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                            @elseif(Session::has('error'))
                            <div class="alert alert-danger text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('error') }}</p>
                            </div>
                            @endif
                            <!-- {{ env('STRIPE_KEY') }} -->
                            <form role="form" action="{{ url('user/stripe') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                @csrf
                                @if(isset($package))
                                <input name="ammount" value="{{$package['price'] ?? '' }}" hidden />
                                <input name="package_id" value="{{$package['id'] ?? '' }}" hidden />

                                @else
                                <input name="ammount" value="{!!$user_request->total_price !!}" hidden />
                                <input name="user_request_id" value="{{$user_request->id }}" hidden />
                                @endif


                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group required'>
                                        <label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text'>
                                    </div>
                                </div>

                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group card required'>
                                        <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                    </div>
                                </div>

                                <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                        <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                    </div>
                                </div>

                                <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                        <div class='alert-danger alert'>Please correct the errors and try
                                            again.</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- Virtual Card Ends Heres-->
                </div>
            </div>
            <div class="col-sm-6">

                <div class="membershipBoxArea">
                    <h2 id="subscription"></h2>
                    @if(isset($package))
                    <div class="freeTrialBox">
                        <p id="subscription_detail"><strong>Monthly Subscription Plan</strong><span>${{$package['price'] }}</span></p>

                        <p>Duration 06/08/2020 - 06/09/2020<span>1 Month</span></p>
                    </div>
                    @endif
                    <div class="discountBox">
                        <p><u><a data-target="#PromoCodeModal" data-toggle="modal" href="#PromoCodeModal">Have a Promo Code?</a></u><strong><span id="promocode_code"></span></strong></p>
                        <div class="spacerArea" id="promo_code_setion">
                        </div>
                        <div class="spacerArea">
                            <p>Subtotal<span id="Subtotal">{{$user_request->total_price ?? $package['price']}}</span></p>
                            <p>Fees<span>$0.5</span></p>
                        </div>
                        <hr>
                        <div class="totalArea">
                            <h2>Total (USD)<span id="final_price">$ {{$user_request->total_price ?? $package['price'] }}</span></h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
</section>
<script src="js/checkout/virtualcard.js"></script>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {

        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>

@endsection
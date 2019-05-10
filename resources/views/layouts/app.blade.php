<!DOCTYPE html>

<html class="no-js no-touch front-page" lang="en">
@include('layouts.head')
<body class=" ">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N66L6Q"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="main-container">
@include('layouts.header')
@include('layouts.script3')

    <div class="main-page home-page" id="pagesmain">
        <div class="row home-row">
        </div>

        @include('layouts.slide-show')

        @include('layouts.header-span')
    </div>



        @include('layouts.footer')
<div id="loginModal" class="modal-box">
    <header>
        <a href="#" class="js-modal-close close">×</a>
        <h3>Sign In / Register</h3>
    </header>
    <div class="modal-body">
        <div class="login-area">
            <span class="register-here">Not registered? <a href="/registration" class="default-link">CREATE AN ACCOUNT</a><a href="/plus" class="plus-link">CREATE A <span class="inline-plus">plus</span> ACCOUNT</a></span>



            <form method="post"  id="login" action="{{url('/login')}}" class="row " >
               {{-- <input type="hidden" name="token" value="13c338c6255dbb45bf86a03d7f0909d4"/>

                <input type="hidden" name="continue" value="/"/>--}}
                {{ csrf_field() }}
               {{-- <div >
                    @if ($errors->has('error_login'))
                        <span style="color:red;font-size:13px;padding-right:10px;" class="help-block">
                                          {{ $errors->first('error_login') }}
                                    </span>
                    @endif
                </div>--}}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-top: 16px;">

                <input class="input input-large form-control" type="email" name="email" placeholder="Email address" id="email" value="{{ old('email') }}"/>
                @if ($errors->has('email'))
                    <span style="color:red" class="help-block">
                            {{ $errors->first('email') }}
                        </span>
                @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-top: 16px;">
                <input class="input input-large form-group" type="password" id="password"  name="password" placeholder="Password" value="{{ old('password') }}"/>
                    @if ($errors->has('password'))
                        <span style="color:red" class="help-block">
                {{ $errors->first('password') }}
                </span>
                    @endif
                </div>
                <div class="captcha-box" style="float: left;margin-bottom: 10px;">
                    <div id="g-recaptcha-modal" class="g-recaptcha-modal" data-sitekey="6LevjSUTAAAAAHZ7bHMXpeebahJ4HTnlcPc-XVD6"></div>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                </div>
               {{--<label class="login-error input-error"></label>--}}

                <div class="span12 alpha omega submit-wrapper">
                    <div class="submit-wrapper-fields span7 alpha">

                        <div class="remember-me-wrap">
                            <label class="checkbox-label">
                                <input type="checkbox" class="ws-checkbox ws-checkbox-small" name="keepLoggedIn"/>
                                <span>Remember me</span>
                            </label>
                            <div class="remember-me-help">?</div>
                        </div>
                        <a href="/reset" class="forgot-pass">Forgotten password?</a>

                    </div>
                    <button type="submit" class="button button-large button-teal">Sign in</button>
                </div>

            </form>
            @if(count($errors)>0)

                    <script>
                        $('#login').modal('show');
                    </script>

            @endif


        </div>

        <div class="reset-pass row" style="display:none;">
            <span style="font-weight: bold;">Forgotten password</span>

            <p class="message"></p>

            <form action="/reset/confirm" method="post" class="reset-password-form" novalidate>
                <input type="hidden" name="token" value="13c338c6255dbb45bf86a03d7f0909d4"/>
                <div class="span12 alpha omega">
                    <p>Please enter your email address below and we'll send you a link to reset your password.</p>
                </div>

                <div class="span12 alpha omega contained-width-fields">
                    <div class="invisible right floater">
                        <button type="submit" class="button button-large button-teal">Submit</button>
                    </div>

                    <div class="input-wrapper">
                        <input type="email" name="email" class="input input-large" placeholder="Email address" required />
                    </div>

                    <div class="right floater">
                        <button type="submit" class="button button-large button-teal">Submit</button>
                    </div>
                </div>

            </form>
            <a href='' class="login-return">Back to login</a>


        </div>

    </div>

</div>



{{--<div id="loginValidModal" class="modal-box">
    <header>
        <a href="#" class="js-modal-close close">×</a>
        <h3>Sign In</h3>
    </header>
    <div class="modal-body">

        <div class="login-area">

            <form id="loginValidForm" action="/securitylogin" class="row" name="login" autocomplete="off">
                <input type="hidden" name="token" value="13c338c6255dbb45bf86a03d7f0909d4"/>
                <input type="hidden" name="start" value="1" />
                <div class="span12 alpha omega">
                    <a href="/logout" class="lnkLogOut">Not you?</a>
                    <div class="clearfix"></div>
                    <input readonly type="email" name="email" id="login_valid_form_email" value="" placeholder="Email address" class="input input-large"/>

                    <input type="password" name="password" id="login_valid_form_password" value="" class="input input-large" autocomplete="off" placeholder="Password" />

                    <label class="login-error input-error"></label>
                    <div class="span12 alpha omega submit-wrapper">
                        <div class="submit-wrapper-fields span8 mobile-span7 alpha">
                            <a href="/reset" class="forgot-pass">Forgotten password?</a>
                        </div>

                        <button class="button button-large button-teal">Sign in</button>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </form>
        </div>

        <div class="reset-pass row" style="display:none;">
            <span style="font-weight: bold;">Forgotten password</span>

            <p class="message"></p>

            <form action="/reset/confirm" method="post" class="reset-password-form" novalidate>
                <input type="hidden" name="token" value="13c338c6255dbb45bf86a03d7f0909d4"/>
                <div class="span12 alpha omega">
                    <p>Use the form below to recover your username and password. New details will be emailed to you.</p>
                </div>

                <div class="span12 alpha omega contained-width-fields">
                    <div class="invisible right floater">
                        <button type="submit" class="button button-large button-teal">Submit</button>
                    </div>

                    <div class="input-wrapper">

                        <input readonly type="email" name="email" value="" placeholder="Email address" class="input input-large"/>
                    </div>

                    <div class="right floater">
                        <button type="submit" class="button button-large button-teal">Submit</button>
                    </div>
                </div>

                <div class="span12 alpha omega">
                    <p>If you have changed your email address then <a href="https://waterstones.zendesk.com/hc/en-us/requests/new" rel="nofollow">contact us</a> and we will update your details.</p>
                </div>
            </form>
            <a href='' class="login-return">Back to login</a>


        </div>

    </div>
</div>--}}


<div id="collectModal" class="modal-box">
    <header>
        <a href="#" class="js-modal-close close">×</a>
        <h3>Click &amp; Collect</h3>
    </header>
    <div class="modal-body">
        <div class="subheading">Simply reserve online and pay at the counter when you collect.
            Available in shop from just two hours, subject to availability.
        </div>
        <div class="collect-box thankyou">
            <div class="title">Thank you for your reservation</div>
            <div>Your order is now being processed and we have sent a confirmation email to you at <span id="customeremail"></span></div>
        </div>
        <div class="collect-box book">
            <div class="thumb"></div>
            <div class="info">
                <div class="title"></div>
                <div class="price"><span class="wasprice"></span><span class="nowprice"></span></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="collect-box stores open">
            <div class="store-message">
                This item can be requested from the shops shown below. <span class="to-buy">If this item isn't available to be reserved nearby, <a href="" class="buy-link">add the item to your basket</a> instead and select 'Deliver to my local shop' at the checkout, to be able to collect it from there at a later date.</span>
                <div style="display:none;">
                    <form class="buy-form" method="post" action="/checkout/setbasketitemqty">
                        <input type="hidden" name="mode" value="add" tabindex="0">
                        <input type="hidden" name="productid" value="" tabindex="0">
                        <input type="hidden" name="quantity" value="1" tabindex="0">
                    </form>
                </div>
            </div>
            <div class="store-container"></div>
            <div class="search">
                <div class="book-detail-cnc">
                    <div class="book-detail-cnc-form">
                        <form method="get" action="/reserve/search" class="find-collect clearfix">
                            <input type="hidden" name="isbn" id="searchshopid" value="">
                            <input type="hidden" name="lat" class="lat">
                            <input type="hidden" name="lng" class="lng">
                            <input type="text" name="search" class="input" placeholder="Search for a shop" value="" required="" autocomplete="off" tabindex="-1">
                            <button class="button button-gold" id="searchterm">Go</button>
                            <div class="js-location-container"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="collect-box details">
            <form action="/reserve/details" method="post" class="reserve-details-form" novalidate="novalidate">
                <input type="hidden" name="total" id="bookprice" value="">
                <input type="hidden" name="isbn" id="collectisbn" value="">
                <input type="hidden" name="shopid" id="collectshopid" value="">
                <div class="field">
                    <label>First name<abbr title="required">*</abbr></label>
                    <input type="text" name="customer_firstname" id="customer_firstname" class="textbox" value="" autocomplete="off">
                    <div class="input-overlay"></div>
                </div>
                <div class="field">
                    <label>Last name<abbr title="required">*</abbr></label>
                    <input type="text" name="customer_lastname" id="customer_lastname"  class="textbox" value="" autocomplete="off">
                    <div class="input-overlay"></div>
                </div>
                <div class="field">
                    <label>Email address<abbr title="required">*</abbr></label>
                    <input type="email" name="customer_email" id="customer_email" class="textbox" value="" autocomplete="off">
                    <div class="input-overlay"></div>
                </div>
                <div class="field"></div>
                <div class="field">
                    <div class="inline-radios">
                        <label>Preferred contact method</label>
                        <div class="fieldset">
                            <label class="radio-label">
                                <input type="radio" name="preferred_contact_method" value="E" id="pref_E" class="input-radio ws-radio" checked="checked">
                                <span>Email</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="preferred_contact_method" value="S" id="pref_S" class="input-radio ws-radio">
                                <span>Text message</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Mobile number<abbr title="required">*</abbr></label>
                    <input type="tel" name="customer_phone" id="customer_phone"  class="textbox" value="" autocomplete="off">
                    <div class="input-overlay"></div>
                </div>
                <div class="field">
                    <label class="checkbox-label">
                        <div class="ws-checkable-outer ws-checkbox-outer"><input type="checkbox" class="ws-checkbox" name="opt_into_mailing" id="opt_into_mailing"></div>
                        <span class="label-content">
                <span>Please provide me with your latest book news, views and details of Waterstones’ special offers.</span>
              </span>
                    </label>
                </div>
                <button class="order button button-gold" type="submit">Place Order</button>
            </form>
            <div class="clearfix"></div>
        </div>
        <div class="collect-box orderready">
            <div class="title">When will my order be ready to collect?</div>
            <div>Following the initial email, you will be contacted by the shop to confirm that your item is available for collection.</div>
            <div class="shopcontact">Call us on <span class="shopphone"></span> or send us an email at <span class="shopemail"></span></div>
            <button class="js-modal-close button button-teal">OK</button>
        </div>
    </div>
    <div class="collect-error">
        <div class="title">Unfortunately there has been a problem with your order</div>
        <div class="error-message"></div>
        <div class="shopcontact">Please try again or alternatively you can contact your chosen shop on <span class="shopphone"></span> or send us an email at <span class="shopemail"></span></div>
        <p></p>
    </div>
</div>


<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"1fd17811e3","applicationID":"15896488","transactionName":"MQdTNRBYXUNZAURbVghNchQRTVxdFwteVlweTVgPBlxL","queueTime":0,"applicationTime":146,"atts":"HUBEQ1hCEUVLB0JtWAEHXxU9SkdCUQxXEANEL14bC1VfUWRNBRwJRkpmCAxdXEdLQn5mGVdSH1FZGWR\/b1QECRkUFAtXVxcDGRglVVFSCT4eU1IIAwAJUgESfw8QVAcNQW8fDlceAhtKQFMOFmZXVUwHU0ZcAkALQyxWERwaEVVBSg8NXz4LXREKGgtCRw0SBURRAU1YAFcSAERaAg5FBlZRVgANQBwQUBY9UAUGS1ZDS0AKEAheWh9TUgEdBQ9MBQYbSkBDBBNMVkNMPUVAUERYEz1NG04cGgMSCEIbHw==","errorBeacon":"bam.nr-data.net","agent":""}</script>
</div>
</body>

</html>
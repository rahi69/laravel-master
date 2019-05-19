<!DOCTYPE html>
<html class="no-js no-touch registration-page" lang="en"> <!--<![endif]-->
@include('layouts.head')

<body class=" ">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N66L6Q"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="main-container">

    <div class="cookie-header-bar cookie-bar">
        <div class="cookie-inner">
            We have recently updated our Privacy Policy. The site uses cookies to offer you a better experience. By continuing to browse the site you accept our Cookie Policy, you can change your settings at any time.<br /><br />
            <div><a href="/help/privacy-policy/1401">View Privacy Policy</a><a href="/help/cookie-policy/1408">View Cookie Policy</a></div>
            <a class="close-cookie-bar js-close-cookie-bar"></a>
        </div>
    </div>
@include('layouts.header')
</div>
<div class="main-page row plus-form account-basic">
    <div class="span8 tablet-span12 prefix2 tablet-prefix0">

        <div class="span12 mobile-span12 omega mobile-alpha login-register">

        </div>


        <div class="reg-intro">
            <h3>Create an Account</h3>

        </div>
        <div class="span12 alpha omega">


            <form action="{{ url('register') }}" method="post"  name="register">
             {{csrf_field()}}
                <div class="span12 alpha omega">

                    <div class="span12 alpha mobile-omega mobile-show">
                        <div class="span12 alpha omega text-right form-info-msg">
                            Denotes required field *
                        </div>
                    </div>


                    <div class="row">
                        <div class="mobile-span12 span6 alpha mobile-omega">
                            <div class="mobile-span3 span12 alpha label-container">
                                <label>Name<abbr title="required">&#42;</abbr></label>
                            </div>
                            <div class="mobile-span9 span12 alpha omega">
                                <input type="text" name="name" id="name"  value="{{ old('name') }}" class="input input-large form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"/>
                                @if ($errors->has('name'))
                                    <span style="color:red; background-color: #ffc0dc" class="invalid-feedback" role="alert">
                                           {{ $errors->first('name') }}
                                        </span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="mobile-span12 span6 alpha mobile-omega">
                            <div class="mobile-span3 span12 alpha label-container">
                                <label>Email<abbr title="required">&#42;</abbr></label>
                            </div>
                            <div class="mobile-span9 span12 alpha omega">
                                <input type="email" name="email" class="input input-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span style="color:red ;background-color: #ffc0dc" class="invalid-feedback" role="alert">
                                          {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="mobile-span12 span6 mobile-alpha omega">
                            <div class="mobile-span3 span12 mobile-alpha label-container">
                                <label>Confirm email<abbr title="required">&#42;</abbr></label>
                            </div>
                            <div class="mobile-span9 span12 mobile-alpha omega">
                                <input type="email" name="email_confirmation" class="input input-large form-control {{ $errors->has('email_confirmation') ? ' is-invalid' : '' }}" id="password-confirm" value="">
                                @if ($errors->has('email_confirmation'))
                                    <span style="color:red ;background-color: #ffc0dc"class="invalid-feedback" role="alert">
                                        {{ $errors->first('email_confirmation') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                        <div class="row">

                            <input style="display: none" type="email" name="prevent_autofill_user" />
                            <input style="display: none" type="password" name="prevent_autofill_pass" autocomplete="off" />

                            <div class="mobile-span12 span6 alpha omega">
                                <div class="mobile-span3 span12 alpha label-container">
                                    <label>Choose a password<abbr title="required">&#42;</abbr></label>
                                </div>

                                <div class="mobile-span9 span12 alpha mobile-omega">
                                    <div class="password-input-wrap">
                                        <input type="password" name="password" value="" id="password" class="input input-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" autocomplete="new-password" type="password" />
                                        @if ($errors->has('password'))
                                            <span style="color:red ;background-color: #ffc0dc" class="invalid-feedback" role="alert">
                                                 {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="mobile-span12 span6 mobile-alpha omega">
                                <div class="mobile-span3 span12 mobile-alpha label-container">
                                    <label>Confirm password<abbr title="required">&#42;</abbr></label>
                                </div>

                                <div class="mobile-span9 span12 mobile-alpha omega">
                                    <div class="password-input-wrap">
                                        <input type="password" name="password_confirmation" class="input input-large   form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"  value="" id="password-confirm"  autocomplete="new-password" />
                                        @if ($errors->has('password_confirmation'))
                                            <span style="color:red ;background-color: #ffc0dc"class="invalid-feedback" role="alert">
                                               {{ $errors->first('password_confirmation') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>



                    <div class="span6 mobile-span12 mobile-alpha omega reg-submit-wrap">
                        {{--<input type="hidden" name="isRegister" value="1" />--}}
                        <button type="submit" class="button button-teal button-large button-regformsubmit button-formsubmit pull-right" name="register" id="register">Register</button>
                    </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.footer')

@extends('layouts.app')

@section('login-signup')
<div class="elementor-element elementor-element-4a5359a e-con-full register-form e-flex e-con e-child" data-id="4a5359a" data-element_type="container">

    {{-- Sign Up Section --}}
    <div class="elementor-element elementor-element-6a1e08b e-con-full e-flex e-con e-child" data-id="6a1e08b" data-element_type="container" data-settings='{"background_background":"classic"}'>
        <div class="elementor-element elementor-element-af87e6f elementor-hidden-mobile elementor-widget elementor-widget-heading" data-id="af87e6f" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Sign Up</h2>
            </div>
        </div>

        <div class="elementor-widget-container">
            <div class="user-registration ur-frontend-form" id="user-registration-form-1095">
                <form class="register" method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Row 1: Name & Email --}}
                    <div class="ur-form-row" data-row-id="0">
                        <div class="ur-form-grid ur-grid-1" style="width:48%">
                            <div class="ur-field-item field-user_login">
                                <div class="form-row validate-required" id="user_login_field">
                                    <label for="name" class="ur-label">
                                        {{ __('Name') }} <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="ur-form-grid ur-grid-2" style="width:48%">
                            <div class="ur-field-item field-user_email">
                                <div class="form-row validate-required" id="user_email_field">
                                    <label for="email" class="ur-label">
                                        {{ __('Email Address') }} <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Row 2: Password & Confirm --}}
                    <div class="ur-form-row" data-row-id="1">
                        <div class="ur-form-grid ur-grid-1" style="width:48%">
                            <div class="ur-field-item field-user_pass">
                                <div class="form-row validate-required hide_show_password" id="user_pass_field">
                                    <label for="password" class="ur-label">
                                        Password <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="ur-form-grid ur-grid-2" style="width:48%">
                            <div class="ur-field-item field-user_confirm_password">
                                <div class="form-row validate-required hide_show_password" id="user_confirm_password_field">
                                    <label for="password-confirm" class="ur-label">
                                        Confirm Password <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="ur-button-container">
                        <button type="submit" class="btn button ur-submit-button">
                            <span></span> {{ __('Sign Up') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Sign In Section --}}
    <div class="elementor-element elementor-element-6d86e92 e-con-full e-flex e-con e-child" data-id="6d86e92" data-element_type="container" data-settings='{"background_background":"classic"}'>
        <div class="elementor-element elementor-element-fe57643 elementor-hidden-mobile elementor-widget elementor-widget-heading" data-id="fe57643" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Sign In</h2>
            </div>
        </div>

        <div class="elementor-widget-container">
            <div id="user-registration" class="user-registration">
                <div class="ur-frontend-form login" id="ur-frontend-form">
                    <form class="user-registration-form user-registration-form-login login" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="ur-form-row">
                            <div class="ur-form-grid">
                                <p class="user-registration-form-row form-row form-row-wide">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <span class="input-wrapper">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </span>
                                </p>

                                <p class="user-registration-form-row form-row form-row-wide">
                                    <label for="password">Password <span class="required">*</span></label>
                                    <span class="input-wrapper">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </span>
                                </p>

                                <div class="user-registration-before-login-btn">
                                    <label class="user-registration-form__label user-registration-form__label-for-checkbox inline">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <span>{{ __('Remember Me') }}</span>
                                    </label>

                                    <p class="user-registration-LostPassword lost_password">
                                        <a href="{{ route('password.request') }}">Lost your password?</a>
                                    </p>
                                </div>

                                <div>
                                    <button type="submit" class="user-registration-Button button" name="login">
                                        {{ __('Sign In') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@extends('Front_layout.nav')
@section('content')

          <div class="modal-body">
            <form method="POST" action="{{ route('login') }}" class="form-horizontal" onsubmit="return submitUserForm();">
                @csrf
                <div class="login_title">
                    <h2>{{ __('Login') }}</h2>
                </div>
             <fieldset>
                 <div class="group">
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="highlight"></span><span class="bar"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="label" for="date">{{ __('Email Address') }}</label>
                </div>
                         <!-- Password input-->
                         <div class="group">
                            <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span class="highlight"></span><span class="bar"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <label class="label" for="date">{{ __('Password') }}</label>
                         </div>
                         <em>minimum 6 characters</em>
                         <br>
                         <div class="forgot-link">
                            {{-- <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                            <br> --}}
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"> {{ __('I forgot my password') }}</a>
                            @endif
                        </div>
                         
                <div class="g-recaptcha" data-sitekey="6Le3FP4ZAAAAAOSXQ4MQsjH3NkII-Oi4krg9F_Pt" data-callback="verifyCaptcha"></div>
                <div id="g-recaptcha-error"></div>
                         <!-- Button --><br>
                         <div class="control-group">
                            <div class="controls">
                               <button id="signin" type="submit" name="signin" class="btn bitcoin_btn">{{ __('Log In') }}</button>
                            </div>
                         </div>
                      </fieldset>
                   </form>
                </div>
                
                
<script>
function submitUserForm() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
    }
    return true;
}
 
function verifyCaptcha() {
    document.getElementById('g-recaptcha-error').innerHTML = '';
}
</script>
@endsection

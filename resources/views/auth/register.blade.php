@extends('Front_layout.nav')


@section('content')
<div  class="modal-body">
    <form method="POST" action="{{ route('register') }}"  class="form-horizontal" onsubmit="return submitUserForm();">
        @csrf
        <div class="login_title">
            <h2>Sign Up</h2>
        </div>
      <fieldset>
         <!-- FNAME input-->
            <div class="group">
                <input type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span class="highlight"></span><span class="bar"></span>
                <label class="label" for="date">First Name</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- LNAME input-->
            <div class="group">
                <input type="text" class="input @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                <span class="highlight"></span><span class="bar"></span>
                <label class="label" for="date">Last Name</label>
                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

         <!-- Password input-->
            <div class="group">
                <input type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <span class="highlight"></span><span class="bar"></span>
                <label class="label" for="date">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
         <!-- Password input-->
            <div class="group">
                <input type="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <span class="highlight"></span><span class="bar"></span>
                <label class="label" for="date">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
         <em>1-8 Characters</em>
            <!-- Confirm Password input-->
            <div class="group">
                <input type="password" name="password_confirmation" required autocomplete="confirm-password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <span class="highlight"></span><span class="bar"></span>
                <label class="label" for="date">Confirm Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <em>1-8 Characters</em>

         <div class="group2">
            <input required="" class="input" name="country" type="text"><span class="highlight"></span><span class="bar"></span>
            <label class="label" for="date">Country</label>
         </div>
         
    
    <div class="group2">
         <div class="g-recaptcha" data-sitekey="6Le3FP4ZAAAAAOSXQ4MQsjH3NkII-Oi4krg9F_Pt" data-callback="verifyCaptcha"></div>
         
         <div id="g-recaptcha-error"></div>
         </div>
         
            
         <!-- Button -->
         <div class="control-group">
            <label class="control-label" for="confirmsignup"></label>
            <div class="controls">
               <button id="confirmsignup" type="submit"  class="btn bitcoin_btn">Sign Up</button>
            </div>
         </div>
      </fieldset>
   </form>
</div>
</div>
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

@extends('Front_layout.nav')
@section('content')
    @include('Front_layout.slider')
    @include('Front_layout.fees')
    @include('Front_layout.price')
    @include('Front_layout.about')
@endsection
 <!-- ///// Login Modal  ////// -->
      <!-- Modal -->
      <div class="modal fade log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
           <div class="modal-content">
              <div class="bs-example bs-example-tabs">
                 <ul id="myTab" class="nav nav-tabs">
                    <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
                    <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
                 </ul>
              </div>
              <div class="modal-body">
                 <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in show" id="signin">
                       <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                        @csrf
                          <fieldset>
                             <!-- Sign In Form -->
                             <!-- Text input-->
                             <div class="group">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="highlight"></span><span class="bar"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="label" for="date">Email address</label>
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
                                <label class="label" for="date">Password</label>
                             </div>
                             <em>minimum 6 characters</em>
                             <div class="forgot-link">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <br>
                                <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
                             </div>
                             <!-- Button -->
                             <div class="control-group">
                                <label class="control-label" for="signin"></label>
                                <div class="controls">
                                   <button id="signin" type="submit" name="signin" class="btn bitcoin_btn btn-block">Log In</button>
                                </div>
                             </div>
                          </fieldset>
                       </form>
                    </div>
                    <!-- Sign Up Form -->
                    <div class="tab-pane fade" id="signup">
                        <form method="POST" action="{{ route('register') }}"  class="form-horizontal">
                            @csrf
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
                             <!-- Button -->
                             <div class="control-group">
                                <label class="control-label" for="confirmsignup"></label>
                                <div class="controls">
                                   <button id="confirmsignup" type="submit"  class="btn bitcoin_btn btn-block">Sign Up</button>
                                </div>
                             </div>
                          </fieldset>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!--modal2-->
     <div class="modal fade bs-" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
           <div class="modal-content">
              <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                 <form class="form-horizontal">
                    <fieldset>
                       <div class="group">
                          <input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
                          <label class="label" for="date">Email address</label>
                       </div>
                       <div class="control-group">
                          <label class="control-label" for="forpassword"></label>
                          <div class="controls">
                             <button id="forpasswodr" name="forpassword" class="btn bitcoin_btn btn-block">Send</button>
                          </div>
                       </div>
                    </fieldset>
                 </form>
              </div>
           </div>
        </div>
     </div>

@extends('Front_layout.nav')


@section('content')


<div class="modal-body">
    <form class="form-horizontal">
        <div class="login_title">
            <h2>Reset Password</h2>
        </div>
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
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('reset-password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

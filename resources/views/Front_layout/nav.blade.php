<!DOCTYPE html>
<html>
   <head>
      <title>CryptoATM</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('assetes/css/style2.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assetes/css/nice-select2.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assetes/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assetes/css/dashboard.css') }}">

      <!-- Font Awesome Link -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
      <!-- Animate -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="{{asset('assetes/js/script2.js')}}"></script>
      <script src="{{asset('assetes/js/jquery.nice-select2.js') }}"></script>
      <script src="{{asset('assetes/js/jquery.nice-select2.min2.js') }}"></script>
      <script src="{{asset('assetes/js/wow.min2.js') }}"></script>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>
   <body>


    <div class="topbar wow fadeIn" data-wow-duration="2s">
        <div class="container">
           <div class="row">
              <div class="col-md-9 pr-0">
                 <div class="main_top">
                    <div class="logo">
                        <a href="/">  <img src="{{ asset('assetes/images/logo.png') }}" alt="" class="img-fluid">
                        </a>  </div>
                    <div class="top_search">
                       <a href="#" class="main_country"> <img src="{{ asset('assetes/images/flag.png') }}" alt="" class="top_img"> English </a>
                       <ul class="country_list">
                          <li> <a href="#" class="english"> <img src="{{asset('assetes/images/flag.png')}}" alt=""> English </a> </li>
                          <li> <a href="#" class="british"> <img src="{{asset('assetes/images/italian.png')}}" alt=""> Italian </a> </li>
                       </ul>
                       <div class="email_us">
                          <a href="#"> <i class="fa fa-envelope"></i> support@company.com </a>
                       </div>
                       <div class="our_accounts">
                          <div class="parent_accounts">
                             <a href="#"> <i class="fa fa-facebook"></i> </a>
                             <a href="#"> <i class="fa fa-twitter"></i> </a>
                             <a href="#"> <i class="fa fa-instagram"></i> </a>
                          </div>
                       </div>
                       <div class="navbar_theme">
                          <div class="nav">
                             <ul>
                                <li> <a href="/" class="nav_link active_nav"> Home</a> </li>
                                <li class="drop-down">
                                   <a class="nav_link ">Services</a>
                                   <ul>
                                      <li><a href="#">Drop Down 1</a></li>
                                      <li><a href="#">Drop Down 5</a></li>
                                   </ul>
                                </li>
                                <li> <a href="#" class="nav_link no_brdr">FAQ</a> </li>
                             </ul>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>

              <div class="col-md-3 d-flex justify-content-xl-end">
                <div class="sign_login">
                @guest
                @if (Route::has('login'))
                <div class="top-right links">
                @auth

                @else
                <a href="{{ route('login') }}" > <i class="fa fa-user-circle-o"></i> Sign In</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" > <i class="fa fa-heart-o"></i> Register</a>
                @endif
                @endauth
                </div>
                @endif
                @else

                @if(auth()->check())
                    @if(auth()->user()->name == 'Admin')
                    <a href="/showclient"> <i class="fa fa-user-circle-o"> &nbsp; </i>{{ Auth::user()->name }}</a>

                    @else
                    <a href="/user"> <i class="fa fa-user-circle-o"> &nbsp; </i>{{ Auth::user()->name }}</a>

                    @endif
                @endif

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
                </div>
                @endguest
                </div>
                </div>

                 </div>
              </div>
           </div>
        </div>





      {{-- <!-- ////// Header /////// -->
      <header>
         <div class="header wow fadeInLeft" >
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="search_with_image">
                        <select class="adjust_style">
                           <option data-display="BTC/euros">Nothing</option>
                           <option value="1">Some option</option>
                           <option value="2">Another option</option>
                        </select>
                        <img src="{{asset('assetes/images/header_bar.png') }}" alt="" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="prices">
                        <div class="minimum">
                           <span>Min</span> <br>
                           <p>€12,000.00</p>
                        </div>
                        <div class="maximum">
                           <span>Max</span> <br>
                           <p>€14,000.00</p>
                        </div>
                        <div class="buy_btn">
                           <button type="button" class="btn bitcoin_btn">Buy Now</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- //////End Header /////// --> --}}

@extends('Front_layout.footer')
      @yield('content')

   </body>
</html>

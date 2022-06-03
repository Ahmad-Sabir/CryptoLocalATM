@extends('Front_layout.nav')
@section('content')
<section class="dashboard">
    <div class="row m-0">
      @include('user.sidebar')
       <div class="col-md-10 p-0">
          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
             <div class="main_title">
                <h3>Purchase Order</h3>
                <div class="dashboard_dropdown">
                   <i class="fa fa-user-circle-o"></i>
                   <ul>
                      <li class="drop-down">
                         <a class="nav_link ">Dashboard</a>
                         <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                         </ul>
                      </li>
                   </ul>
                </div>
             </div>

             <div class="verification">
                <div class="verf_title order">
                   <h4>Redeem Voucher</h4>
                   <p>Scan QR Code</p>
                   <img src="{{asset ('assetes/images/qr.png') }}" alt="">
                </div>

          </div>
       </div>
    </div>
 </section>


@endsection

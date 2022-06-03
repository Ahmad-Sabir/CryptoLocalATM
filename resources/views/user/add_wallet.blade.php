@extends('Front_layout.nav')
@section('content')
<section class="dashboard">
    <div class="row m-0">
      @include('user.sidebar')
       <div class="col-md-10 p-0">
          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
             <div class="main_title">
                <h3>Add New Wallet</h3>
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

             <div class="add_wallet">
                <div class="container">
                   <div class="row">
                      <div class="col-md-6 d-flex align-items-center">
                         <div class="add_wallet_fields main_title_verfication ">
                            <div class="form-group">
                               <input type="text" name="" value="" class="form-control" placeholder="Wallet Name">
                            </div>
                            <div class="form-group">
                               <div class="make_position">
                                  <input type="number" name="" value="" class="form-control" placeholder="120.214">
                                  <img src="{{ asset('assetes/images/qr_bg.png') }}" alt="">
                                  <select class="adjust_style">
                                     <option data-display="DOGE">DOGE</option>
                                     <option value="1">Some option</option>
                                     <option value="2">Another option</option>
                                  </select>
                               </div>
                            </div>
                            <div class="add_wallet_btn">
                               <button type="button" class="btn">Add</button>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-6">
                         <img src="{{ asset('assetes/images/new_wallet.png') }}" alt="" class="img-fluid">
                      </div>
                   </div>
                </div>
             </div>
       </div>
    </div>
 </section>


@endsection

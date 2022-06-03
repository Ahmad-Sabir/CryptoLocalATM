@extends('Front_layout.nav')
@section('content')
<section class="dashboard">
    <div class="row m-0">
      @include('user.sidebar')
       <div class="col-md-10 p-0">
          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
             <div class="main_title">
                <h3>Wallet</h3>
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


  <div class="wallets">
    <div class="container">
       <div class="row">
          <div class="col-md-3">
             <div class="main_wallet">
                <div class="top_wallet">
                   <h4>My First Card</h4>
                   <span><a href="#" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"></i></a></span>
                </div>
                <div class="inner_wallet text-center">
                   <img src="{{ asset('assetes/images/box2.png') }}" alt="">
                   <p>Ethereum</p>
                </div>
                <div class="design_images">
                   <img src="{{ asset('assetes/images/wallet1.png') }}" alt="" class="img-fluid bottom_img">
                   <img src="{{ asset('assetes/images/wallet2.png') }}" alt="" class="img-fluid top_img">
                </div>
             </div>
          </div>
          <div class="col-md-3">
             <div class="main_wallet">
                <div class="top_wallet">
                   <h4>My 2nd Card</h4>
                   <span><a href="#" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"></i></a></span>
                </div>
                <div class="inner_wallet text-center">
                   <img src="{{ asset('assetes/images/box6.png') }}" alt="">
                   <p>Ripple</p>
                </div>
                <div class="design_images">
                   <img src="{{ asset('assetes/images/wallet1.png') }}" alt="" class="img-fluid bottom_img">
                   <img src="{{ asset('assetes/images/wallet2.png') }}" alt="" class="img-fluid top_img">
                </div>
             </div>
          </div>
          <div class="col-md-3">
             <div class="main_wallet">
                <div class="top_wallet">
                   <h4>My 3rd Card</h4>
                   <span><a href="#" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"></i></a></span>
                </div>
                <div class="inner_wallet text-center">
                   <img src="{{ asset('assetes/images/box4.png') }}" alt="">
                   <p>Dashcoin</p>
                </div>
                <div class="design_images">
                   <img src="{{ asset('assetes/images/wallet1.png') }}" alt="" class="img-fluid bottom_img">
                   <img src="{{ asset('assetes/images/wallet2.png') }}" alt="" class="img-fluid top_img">
                </div>
             </div>
          </div>
          <div class="col-md-3">
             <div class="blank_wallet">
                <span><a href="add_wallet">+</a></span>
             </div>
          </div>
       </div>
    </div>
</div>

          </div>
       </div>
    </div>
 <!-- Modal -->
 <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <div class="reedem_modal_detail">
                <h5>Do you really want to delete this wallet?</h5>
                <div class="reedem_modal_button">
                   <button type="button" class="btn no_btn">No</button>
                   <button type="button" class="btn yes_btn">Yes</button>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 </section>


@endsection

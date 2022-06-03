@extends('Front_layout.nav')

@section('content')

<section class="dashboard">

    <div class="row m-0">

      @include('user.sidebar')

       <div class="col-md-10 p-0">

          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">

             <div class="main_title">

                <h3>Reedem Voucher</h3>

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



             <div class="reedem_voucher">

                <div class="container">

                   <div class="reedem_voucher_img">

                      <img src="{{ asset('assetes/svg/reedem.svg') }}" alt="" class="img-fluid">

                   </div>

                   <div class="reedem_voucher_text text-center">

                      <h6>Scan QR Code to redeem voucher</h6>

                      <button type="button" class="btn" data-toggle="modal" data-target="#reedem_modal"><span><img src="images/scanner.png" alt="" class="img-fluid"></span>Redeem voucher</button>

                   </div>

                </div>

             </div>



          </div>

       </div>

    </div>

    

 </section>

   <div class="modal fade" id="reedem_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

          <div class="modal-content">

            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">&times;</span>

              </button>

            </div>

            <div class="modal-body">

              <div class="reedem_modal_detail">

               

                 <h5>Do you want to Redeem now?</h5>

                 <div class="reedem_modal_button">

                    <button type="button" class="btn no_btn">No</button>

                   <a href="{{route('reedem_voucher_yes')}}" > <button type="button" class="btn yes_btn">Yes</button></a>

                 </div>

              </div>

            </div>

          </div>

        </div>

      </div>





@endsection


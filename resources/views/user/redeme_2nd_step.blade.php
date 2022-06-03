@extends('Front_layout.nav')

@section('content')

<section class="dashboard">

    <div class="row m-0">

      @include('user.sidebar')

       <div class="detail_section aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">

                  <div class="main_title">

                     <h3>Redeem Voucher</h3>

                  </div>

                  <div class="reedem_voucher2">

                     <div class="container">

                        <div class="row">

                           <div class="col-md-5 d-flex align-items-center">

                              <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/reedem_voucher.png" alt="" class="img-fluid">

                           </div>

                           <div class="col-md-7">

                              <div class="redem_2">

                                 <h5 class="reedem_text">Cryptocurrencies</h5>

                                 <div class="row">

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list active_all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box1.png" alt="">

                                          <h5>BITCOIN</h5>

                                       </div>

                                    </div>

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box2.png" alt="">

                                          <h5>ETH</h5>

                                       </div>

                                    </div>

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box3.png" alt="">

                                          <h5>LTC</h5>

                                       </div>

                                    </div>

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box4.png" alt="">

                                          <h5>DASH</h5>

                                       </div>

                                    </div>

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box7.png" alt="">

                                          <h5>USDT</h5>

                                       </div>

                                    </div>

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box5.png" alt="">

                                          <h5>DOGE</h5>

                                       </div>

                                    </div>

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box6.png" alt="">

                                          <h5>XRP</h5>

                                       </div>

                                    </div>

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box1.png" alt="">

                                          <h5>BCH</h5>

                                       </div>

                                    </div>

                                    <div class="col-md-3 pr-0">

                                       <div class="all_cur_list">

                                          <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/box8.png" alt="">

                                          <h5>XMR</h5>

                                       </div>

                                    </div>

                                 </div>

                                 <div class="card_value mt-3">

                                    <div class="redeem_title">

                                       <h4>The card has a value of:</h4>

                                    </div>

                                    <input type="number" name="" value="" placeholder="€1000.00" class="form-control custom_style">

                                 </div>

                                 <div class="row mt-3">

                                    <div class="redeem_title">

                                       <h4>Wallet Destination:</h4>

                                    </div>

                                    <div class="col-md-8">

                                       <div class="input_reedem_section">

                                          <div class="reedem_inputs form-group">

                                             <div class="make_position">

                                                <input type="number" name="" value="" class="form-control" placeholder="120.214">

                                                <img src="https://cryptolocalatm.stepinnsolution.com/assetes/images/qr_bg.png" alt="">

                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="col-md-4">

                                       <div class="select_reedem_section">

                                          <div class="reedem_selects form-group">

                                             <select class="adjust_style" style="display: none;">

                                                <option data-display="Select Wallet">Select Wallet</option>

                                                <option value="1">Some option</option>

                                                <option value="2">Another option</option>

                                             </select><div class="nice-select adjust_style" tabindex="0"><span class="current">Select Wallet</span><ul class="list"><li data-value="Select Wallet" data-display="Select Wallet" class="option selected focus">Select Wallet</li><li data-value="1" class="option">Some option</li><li data-value="2" class="option">Another option</li></ul></div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                                 <div class="row mt-3">

                                    <div class="redeem_title">

                                       <h4>Mining Fees</h4>

                                    </div>

                                    <div class="col-md-4">

                                       <div class="price_buttons filled_button">

                                          <button type="button" class="btn">LOW</button>

                                       </div>

                                    </div>

                                    <div class="col-md-4">

                                       <div class="price_buttons">

                                          <button type="button" class="btn">NORMAL</button>

                                       </div>

                                    </div>

                                    <div class="col-md-4">

                                       <div class="price_buttons">

                                          <button type="button" class="btn">HIGH</button>

                                       </div>

                                    </div>

                                 </div>

                                 <div class="list_and_data">

                                    <ul>

                                       <li>Shipping Cost <span>€12.00</span></li>

                                       <li>Admin Commissi on  <span>5%</span></li>

                                       <li>Fee  <span>Low mining fee</span></li>

                                    </ul>

                                    <div class="recieve_text">

                                       <h3>You will recieve  <span>0.00303722</span></h3>

                                    </div>

                                    <div class="reedem2_btn">

                                       <button type="button" data-toggle="modal" data-target="#reedem_modal"><img src="images/money-bank note-gift.png" class="img-fluid">Redeem voucher</button>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

    </div>

    

 </section>

  <div class="modal fade" id="reedem_modal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">

         <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

               <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">×</span>

                  </button>

               </div>

               <div class="modal-body">

                  <div class="reedem_modal_detail reedem_2_modal text-center">

                     <h5>You sure to Redeem now?</h5>

                     <p class="red sure_p">If you are sure to redeem it

                        and that once the code has been redeemed it no longer has any value.

                     </p>

                     <div class="reedem_modal_button">

                        <button type="button" class="btn no_btn">No</button>

                        <button type="button" class="btn yes_btn">Yes</button>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>





@endsection


@extends('Front_layout.index')
@section('content')
      <section class="dashboard">
        <div class="row m-0">
         @include('user.sidebar')
           <div class="col-md-10 p-0">
              <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
                 <div class="main_title">
                    <h3>Dashboard</h3>
                    <div class="dashboard_dropdown">
                       <i class="fa fa-user-circle-o"></i>
                       <ul>
                          <li class="drop-down">
                             <a class="nav_link ">Dashboard</a>
                             <ul>
                                <li><a href="#">Profile</a></li>
                                <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a></li>
                                    <?php $data = DB::table('login_securities')->where('user_id' , auth()->user()->id)->first();
                                       if(!isset($data) || $data == null){
                                    ?>
                                    <li> <a href="{{url('2fa')}}">Enable 2fa </a> </li>
                                    <?php    }
                                    else{
                                        ?>
                                        <li> <a href="{{url('2fa/disable/'. auth()->user()->id)}}">Disable 2fa </a> </li>
                                    <?php }  ?>
                             </ul>
                          </li>
                       </ul>
                    </div>
                 </div>
             
                    <div class="col-md-10 p-0">
                     <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
                       <div class="main_title">
                         <h3>Dashboard</h3>
                       </div>
                       <div class="vouchers_btns">
                         <div class="btns">
                           <button type="button" class="btn"> <span><img src="{{ asset('assetes/images/truck.png') }}" alt=""></span> Order Voucher</button>
                           <button type="button" class="btn"> <span><img src="{{ asset('assetes/images/scanner.png') }}" alt=""></span> Reedem voucher</button>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-md-3">
                           <div class="order_box">
                             <div class="order_box_img">
                               <img src="{{ asset('assetes/images/orange_ordr.png') }}" alt="">
                             </div>
                             <div class="order_box_text">
                               <h5>Total Orders</h5>
                               <p>10</p>
                             </div>
                           </div>
                         </div>
                         <div class="col-md-3">
                           <div class="order_box">
                             <div class="order_box_img">
                               <img src="{{ asset('assetes/images/green_ordr.png') }}" alt="">
                             </div>
                             <div class="order_box_text">
                               <h5>Completed Orders</h5>
                               <p>06</p>
                             </div>
                           </div>
                         </div>
                         <div class="col-md-3">
                           <div class="order_box">
                             <div class="order_box_img">
                               <img src="{{ asset('assetes/images/dard_ordr.png') }}" alt="">
                             </div>
                             <div class="order_box_text">
                               <h5>Pending Orders</h5>
                               <p>02</p>
                             </div>
                           </div>
                         </div>
                         <div class="col-md-3">
                           <div class="order_box">
                             <div class="order_box_img">
                               <img src="{{ asset('assetes/images/red_ordr.png') }}" alt="">
                             </div>
                             <div class="order_box_text">
                               <h5>Canceled Orders</h5>
                               <p>02</p>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class="orders_table">
                         
                         <div class="filter_order">
                           <div class="search_and_list">
                             <select class="adjust_style">
                               <option data-display="All Orders">All Orders</option>
                               <option value="1">Pending Orders</option>
                               <option value="2">Completed Orders</option>
                             </select>
                             <div class="search_input">
                               <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Search...">
                                 <div class="input-group-append">
                                   <a href="#">
                                     <i class="fa fa-search"></i>
                                   </a>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="download_order">
                             <p>Download Receipt</p>
                             <a href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
                           </div>
                         </div>
                         <table class="table table-striped">
                           <thead>
                             <tr>
                               <th scope="col">Crypto Trade</th>
                               <th scope="col">Price</th>
                               <th scope="col">Amount</th>
                               <th scope="col">Fees</th>
                               <th scope="col">Date/Time</th>
                               <th scope="col">Status</th>
                               <th scope="col">Details</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <td>
                                 <div class="coin_image">
                                   <img src="{{ asset('assetes/images/box1.png') }}" alt="">
                                   <span>Bitcoin</span>
                                 </div>
                               </td>
                               <td class="price_td">€120.00</td>
                               <td><a href="#" class="amount_td">0.001254</a></td>
                               <td>Low Mining Fee</td>
                               <td>Dec 12, 2020 15:20</td>
                               <td><button type="button" class="pending_btn">Pending</button></td>
                               <td><button type="button" class="check_btn">Check</button></td>
                             </tr>
                             <tr>
                               <td>
                                 <div class="coin_image">
                                   <img src="{{ asset('assetes/images/box2.png') }}" alt="">
                                   <span>Ethereum</span>
                                 </div>
                               </td>
                               <td class="price_td">€10.00</td>
                               <td><a href="#" class="amount_td">0.12254</a></td>
                               <td>Low Mining Fee</td>
                               <td>Dec 12, 2020 15:20</td>
                               <td><button type="button" class="complete_btn">Completed</button></td>
                               <td><button type="button" class="check_btn">Check</button></td>
                             </tr>
                             <tr>
                               <td>
                                 <div class="coin_image">
                                   <img src="{{ asset('assetes/images/box6.png') }}" alt="">
                                   <span>Ripple</span>
                                 </div>
                               </td>
                               <td class="price_td">€120.00</td>
                               <td><a href="#" class="amount_td">0.52134</a></td>
                               <td>Low Mining Fee</td>
                               <td>Dec 12, 2020 15:20</td>
                               <td><button type="button" class="cencal_btn">Canceled</button></td>
                               <td><button type="button" class="check_btn">Check</button></td>
                             </tr>
                             <tr>
                               <td>
                                 <div class="coin_image">
                                   <img src="{{ asset('assetes/images/box4.png') }}" alt="">
                                   <span>Dashcoin</span>
                                 </div>
                               </td>
                               <td class="price_td">€50.00</td>
                               <td><a href="#" class="amount_td">1.001254</a></td>
                               <td>Low Mining Fee</td>
                               <td>Dec 12, 2020 15:20</td>
                               <td><button type="button" class="complete_btn">Completed</button></td>
                               <td><button type="button" class="check_btn">Check</button></td>
                             </tr>
                           </tbody>
                         </table>
                         <div class="pagination_custom">
                           <nav>
               <ul class="pager">
                 <li class="pager__item pager__item--prev"><a class="pager__link" href="#">
                     <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                       <g fill="none" fill-rule="evenodd">
                         <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                       </g>
                     </svg></a></li>
                 <li class="pager__item"><a class="pager__link" href="#">1</a></li>
                 <li class="pager__item active"><a class="pager__link" href="#">2</a></li>
                 <li class="pager__item"><a class="pager__link" href="#">3</a></li>
                 <li class="pager__item"><a class="pager__link" href="#">4</a></li>
                 <li class="pager__item"><a class="pager__link" href="#">5</a></li>
                 <li class="pager__item"><a class="pager__link" href="#">6</a></li>
                 <li class="pager__item"><a class="pager__link" href="#">...</a></li>
                 <li class="pager__item pager__item--next"><a class="pager__link" href="#">
                     <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
                       <g fill="none" fill-rule="evenodd">
                         <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
                       </g>
                     </svg></a></li>
               </ul>
             </nav>
                         </div>
                       </div>
                       <div class="row mt-4">
                         <div class="col-md-6">
                           <div class="rules">
                             <div class="rules_head">
                               <h6>Last Tracking Courier</h6>
                             </div>
                             <div class="detail_track">
                               <div class="ordr_detail">
                                 <h5>Order Number</h5>
                                 <h4>#10</h4>
                               </div>
                               <div class="ordr_detail">
                                 <h5>Date</h5>
                                 <h4>Dec 02, 2020</h4>
                               </div>
                               <div class="ordr_detail">
                                 <h5>Dec 02, 2020</h5>
                                 <h4>€300.00</h4>
                               </div>
                             </div>
                             <div class="track_button text-center">
                               <button type="button"> <img src="{{ asset('assetes/images/tracking.png') }}" alt=""> Tracking</button>
                             </div>
                           </div>
                         </div>
                         <div class="col-md-6">
                           <div class="wallet_card">
                             <div class="wallet_card_head">
                               <h6>My Wallets</h6>
                             </div>
                             <div class="wallet_card_list">
                               <div class="container">
                                 <div class="row">
                                   <div class="col-md-7">
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
                                   <div class="col-md-7">
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
                                 </div>
                                 <div class="all_wallet">
                                   <a href="#">Show all</a>
                                 </div>
                               </div>
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
@endsection

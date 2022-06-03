@extends('Front_layout.nav')
@section('content')
<section class="dashboard">
    <div class="row m-0">
      @include('user.sidebar')
       <div class="col-md-10 p-0">
          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
             <div class="main_title">
                <h3>Orders</h3>
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


             <div class="orders">
                <div class="orders_table">


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
                            <td><button type="button" class="complete_btn">Pending</button></td>
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
                            <td><button type="button" class="cencal_btn">Pending</button></td>
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
                            <td><button type="button" class="complete_btn">Pending</button></td>
                            <td><button type="button" class="check_btn">Check</button></td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
       </div>
    </div>
 </section>


@endsection

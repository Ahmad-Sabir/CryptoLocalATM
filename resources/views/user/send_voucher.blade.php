@extends('Front_layout.nav')
@section('content')
<style>
    .second_btn {
        display: none;
    }
</style>
<section class="dashboard">
    <div class="row m-0">
      @include('user.sidebar')
       <div class="col-md-10 p-0">
          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
             <div class="main_title">
                <h3>Send Voucher
                </h3>
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
                <div class="container">
                   <div class="row">
                      <div class="board">
                         <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                         <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                               <div class="liner"></div>
                               <li class="tabs_list active">
                                  <a href="#home" data-toggle="tab" title="welcome">
                                     <span class="round-tabs one">
                                        1
                                     </span>
                                  </a></li>
                                  <li class="tabs_list"><a href="#profile" data-toggle="tab" title="profile">
                                     <span class="round-tabs two">
                                        2
                                     </span>
                                  </a>
                               </li>
                               <li class="tabs_list"><a href="#messages" data-toggle="tab" title="">
                                  <span class="round-tabs three">
                                     3
                                  </span> </a>
                               </li>
                               <li class="tabs_list"><a href="#settings" data-toggle="tab" title="blah blah">
                                  <span class="round-tabs four">
                                     4
                                  </span>
                               </a></li>

                            </ul></div>
                            <form class="form-horizontal" method="POST" action="{{ url('store_voucher') }}" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                <div class="tab-content">
                               <div class="tab-pane fade in active show" id="home">
                                  <div class="main_detail_tab text-center">
                                     <div class="detail_tabs">
                                        <img src="{{ asset('assetes/images/login_tabs1.png') }}" alt="" class="img-fluid">
                                        <h5>Shipping Address</h5>
                                        <p>{{$data->address}}</p>
                                     </div>
                                     <div class="custom_alert">
                                        <p><i class="fa fa-exclamation-circle"></i> You are only sent to the verification address not to other addresses</p>
                                     </div>
                                     <div class="confirm_btn">
                                        <button type="button" id="first_tab">Confirm</button>
                                     </div>
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="profile">
                                  <div class="main_detail_tab text-center">
                                     <div class="detail_tabs">
                                        <img src="{{ asset('assetes/images/login_tabs4.png') }}" alt="" class="img-fluid">
                                        <h5>Voucher Value</h5>
                                        <p>Enter the amount in euros you <br>
                                           want to convert later</p>
                                     </div>

                                     <div class="amount_input">
                                        <input type="number" name="amount" value="" class="form-control dummy_input" id="input_value" placeholder="Add voucher amount">
                                        <span><img src="{{ asset('assetes/images/pound.png') }}" alt=""></span>
                                        <p>Shipping Cost <span>{{$ship->ship_fee}} %</span></p>
                                        <p class="add_margin">Admin Commission <span>{{$ship->admin_fee}} % </span></p>
                                        
                                        <input  type="hidden" value="{{$ship->ship_fee}}"  readonly id="shippingcost"  >
                                        <input  type="hidden" value="{{$ship->admin_fee}}"  readonly id="admincomission"  >
                                        <label>Amount you have to pay after tax.</label>
                                        <input  type="number" name="final_amount" value=""  readonly id="abc"  >
                                        
                                        <p id="show_result">  </p>
                                        
                                    
                                        
                                        
                                        
                                     </div>
                                     <div class="confirm_btn second_btn">
                                        <button type="button" id="second_tab">Confirm</button>
                                     </div>
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="messages">
                                  <div class="main_detail_tab text-center">
                                     <div class="detail_tabs">
                                        <img src="{{ asset('assetes/images/login_tabs3.png') }}" alt="" class="img-fluid">
                                        <h5>Summary</h5>
                                     </div>
                                     <div class="custom_listing">
                                        <ul>
                                           <li><p>Your Shipping address is “{{$data->address}}”</p></li>

                                           <li><p id ="with_out_tax_voucher">You will receive a  XXXX EUR voucher</p></li>

                                           <li><p >That you will pay in cash to the courier and then you can redeem on our site.</p></li>

                                           <li><p id = "with_tax_voucher">The cost when you redeem will give  EUR + X% </p></li>

                                           <li><p>Limit min €120.00 and max €30.00</p></li>

                                        </ul>

                                     </div>
                                     <div class="custom_alert third_tab">
                                           <p><i class="fa fa-exclamation-triangle"></i> In case of non-payment the account will be blocked and to unblock it there will be a penalty to be paid.</p>
                                        </div>
                                     <div class="confirm_btn">
                                        <button type="button" id="third_tab">Confirm</button>
                                     </div>
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="settings">
                                  <div class="main_detail_tab text-center">
                                     <div class="detail_tabs">
                                        <img src="{{ asset('assetes/images/login_tabs2.png') }}" alt="" class="img-fluid">
                                        <h5>Ready to send</h5>

                                     </div>
                                     <div class="dummy_text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and <br>typesetting industry. Lorem Ipsum has been the industry's <br> standard dummy text ever since the 1500s,</p>
                                     </div>
                                     <div class="send_btn forth_btn">
                                        <button type="submit">Send <i class="fa fa-bus"></i></button>
                                     </div>
                                  </div>
                               </div>
                               <div class="clearfix"></div>
                            </div>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
       </div>
    </div>
 </section>
 
 <script>
     $('input[name=amount]').keyup(function(){
        if($('.dummy_input').val().length)
          { 
              $('.confirm_btn').show();
                var x = parseFloat(document.getElementById("input_value").value);
                var admin_com = parseFloat(document.getElementById("admincomission").value);
                var shipping_cost =parseFloat(document.getElementById("shippingcost").value);
                admin_com = x/admin_com;
                shipping_cost = x/shipping_cost;
                var y = x + admin_com +shipping_cost; 
                  y =   y.toFixed(3)
                
                
                
                //  alert(x);
                document.getElementById("abc").value = y;
                 document.getElementById("with_out_tax_voucher").innerHTML = "You will receive a " + x +" EUR voucher";
                   document.getElementById("with_tax_voucher").innerHTML =  "The cost when you redeem will give " + y +"EUR" ; 
          
          }
            else
            {
                $('.confirm_btn').hide();
                document.getElementById("abc").value = 0;
                
            }
        }); 
        
        $(function(){

          $('#first_tab').click(function(e){
            e.preventDefault();
            var next_tab = $('.nav-tabs > .active').next('li').find('a');
            if(next_tab.length>0){
              next_tab.trigger('click');
            }else{
              $('.nav-tabs li:eq(0) a').trigger('click');
            }
          });
        });
        
         $(function(){

          $('#second_tab').click(function(e){
            e.preventDefault();
            var next_tab = $('.nav-tabs > .active').next('li').find('a');
            if(next_tab.length>0){
              next_tab.trigger('click');
            }else{
              $('.nav-tabs li:eq(0) a').trigger('click');
            }
          });
        });
        $(function(){

          $('#third_tab').click(function(e){
            e.preventDefault();
            var next_tab = $('.nav-tabs > .active').next('li').find('a');
            if(next_tab.length>0){
              next_tab.trigger('click');
            }else{
              $('.nav-tabs li:eq(0) a').trigger('click');
            }
          });
        });
 </script>


@endsection

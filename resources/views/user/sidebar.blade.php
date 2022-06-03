<div class="col-md-2 sidebar_bg" data-aos="fade-in" data-aos-duration="1000">
    <div class="sidebar">
       <div class="sidebar_logo">
          <img src="{{ asset('assetes/images/logo.png') }}" alt="">
          <h3>Crypto</h3>
       </div>
       <div class="sidebar_links">
          <ul>
            <li>
             <a class="active_sidebar <?php if (Request::segment(1) == "user") echo "active";?>" href="{{url('user')}}"><i class="fa fa-dashboard"></i>Dasboard</a>
            </li>
                 <li>
             <a class="active_sidebar <?php if (Request::segment(1) == "verifystep1") echo "active"; ?>" href="{{url('verifystep1')}}"><i class="fa fa-check"></i>Verification</a>
              </li>
              <li>
             <a class="active_sidebar <?php if (Request::segment(1) == "send_voucher") echo "active"; ?>" href="{{url('send_voucher')}}"><i class="fa fa-bus"></i>Send Voucher</a>
              </li>
              <li>
             <a class="active_sidebar <?php if (Request::segment(1) == "reedem_voucher") echo "active"; ?>" href="{{url('reedem_voucher')}}"><i class="fa fa-ticket"></i>Redeem Voucher</a>
              </li>
              <li>
             <a class="active_sidebar <?php if (Request::segment(1) == "purchase_order") echo "active"; ?>" href="{{url('purchase_order')}}"><i class="fa fa-sort"></i>Orders</a>
              </li>
              <li>
             <a class="active_sidebar <?php if (Request::segment(1) == "my_wallet") echo "active"; ?>" href="{{url('my_wallet')}}"><i class="fa fa-briefcase"></i>My wallets</a>
              </li>
              <li>
             <a class="active_sidebar <?php if (Request::segment(1) == "support_ticket") echo "active"; ?>" href="{{url('support_ticket')}}"><i class="fa fa-question-circle"></i>Support</a>
             </li>
              <li>
             <a class="active_sidebar <?php if (Request::segment(1) == "setting") echo "active"; ?>" href="{{url('setting')}}"><i class="fa fa-cog"></i>Setting</a>
              </li>
          </ul>
       </div>
    </div>
 </div>

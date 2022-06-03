
      <!-- /////  Fees section /////// -->
      <section class="fees">
        <div class="container">
           <div class="section_title text-center" data-aos="fade-down"  data-aos-duration="1000">
              <h2>Order Voucher Card</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida <br> tortor elit, , at viverra libero lectus et.</p>
           </div>

           <div class="row">
              <div class="col-md-4">
                 <div class="price_input">
                    <label>Enter Price</label>
                    <input type="number" name="" value="" class="form-control" placeholder="50">
                    <span><img src="{{ asset('assetes/images/pound_yellow.png') }}" alt=""></span>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="price_input">
                    <label>Price in cryptocurrency</label>
                    <div class="currency_input">
                       <input type="text" name="" value="" class="form-control" placeholder="120.214">
                       <select class="nice-select adjust_style">
                          <option data-display="BTC">BTC</option>
                          <option value="1">Some option</option>
                          <option value="2">Another option</option>
                       </select>
                    </div>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="price_select">
                    <select class="nice-select adjust_style">
                          <option data-display="DOGE">DOGE</option>
                          <option value="1">Some option</option>
                          <option value="2">Another option</option>
                       </select>
                 </div>
              </div>
           </div>


           <div class="progress_bars">
              <div class="circle-border"  data-aos="fade-up" data-aos-duration="1200">
                 <div class="circle">
                    <img src="{{ asset('assetes/images/progress1.png') }}" alt="" class="first_progress_img">
                    <h2>Admin Fee</h2>
                    <span>10%</span>
                 </div>
                 <i class="fa fa-circle"></i>
              </div>
              <div class="circle-border circle_main2" data-aos="fade-left" data-aos-duration="1400">
                 <div class="circle">
                    <img src="{{ asset('assetes/images/progress2.png') }}" alt="">
                    <h2>Shipping Fee</h2>
                    <span>15%</span>
                 </div>
                 <i class="fa fa-circle"></i>
              </div>
              <div class="circle-border circle_main3" data-aos="flip-down" data-aos-duration="1600">
                 <div class="circle">
                    <img src="{{ asset('assetes/images/progress3.png') }}" alt="">
                    <h2>Mining ( Low )</h2>
                    <span>20%</span>
                 </div>
                 <i class="fa fa-circle"></i>
              </div>
           </div>
           <div class="cash_receive">
              <h3>You will recieve  <span>0.214584</span></h3>
              <button type="button" class="btn"> <span><img src="{{ asset('assetes/images/black_truck.png') }}" alt=""></span> Order Voucher Card</button>
           </div>
        </div>
     </section>
     <!-- ///// End Fees section /////// -->

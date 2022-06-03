@extends('Front_layout.nav')
@section('content')
@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
<section class="dashboard">
    <div class="row m-0">
      @include('user.sidebar')
       <div class="col-md-10 p-0">
          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
             <div class="main_title">
                <h3>Verification</h3>
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
                <div class="verf_title">
                   <h4>Shipping verification</h4>
                   <p>Verify your shipping address by complete all steps below.</p>
                </div>
                <div class="identify_steps">
                   <div class="identity_verification selfie">
                      <div class="verification_title active_title">
                         <div class="make_circle">
                            <i class="fa fa-id-card"></i>
                            <h5>Identity Verification</h5>
                         </div>
                         <div class="verify_custom align_to_right">
                            <button type="submit" class="btn verf_next">Verify</button>
                         </div>
                      </div>
                   </div>
                   <div class="identity_verification selfie">
                      <div class="verification_title active_title">
                         <div class="make_circle">
                            <i><img src="{{ asset('assetes/images/selfie.png') }}" alt=""></i>
                            <h5>Selfie Verification</h5>
                         </div>
                         <div class="verify_custom align_to_right">
                            <button type="submit" class="btn verf_next">Verify</button>
                         </div>
                      </div>
                   </div>
                   <div class="identity_verification selfie">
                      <div class="verification_title active_title">
                         <div class="make_circle">
                            <i><img src="{{ asset('assetes/images/page.png') }}" alt=""></i>
                            <h5>Proof of Residence</h5>
                         </div>
                         <div class="verify_custom align_to_right">
                            <button type="submit" class="btn verf_next">Verify</button>
                         </div>
                      </div>

                   </div>
                   <div class="identity_verification selfie">
                      <div class="verification_title active_title">
                         <div class="make_circle">
                            <i><img src="{{ asset('assetes/images/msg.png') }}" alt=""></i>
                            <h5>SMS token</h5>
                         </div>
                         <div class="verify_custom align_to_right">
                            <button type="submit" class="btn verf_next">Verify</button>
                         </div>
                      </div>

                   </div>
                   <div class="identity_verification selfie no_shadow">
                      <div class="verification_title disable">
                         <div class="make_circle">
                            <i><img src="{{ asset('assetes/images/last.png') }}" alt=""></i>
                            <h5>CryptoLocalSHIP</h5>
                         </div>
                      </div>
                      <div class="steps main_title_verfication">
                     <form method="post" action="shipverify" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                              <div class="row">
                               <div class="col-md-6">
                               <div class="form-group">
                                  <input type="text" name="fname" class="form-control" placeholder="Mr Jone" required>
                               </div>
                               <div class="form-group">
                                  <select class="adjust_style" name="nationality">
                                     <option data-display="Choose a nationality"></option>
                                     <option value="Pakistani">Pakistani</option>
                                     <option value="Indian">Indian</option>
                                     <option value="Italian">Italian</option>
                                  </select>
                               </div>
                               <div class="form-group">
                                  <input type="text" name="city"  class="form-control" placeholder="City" required>
                               </div>
                               <div class="form-group">
                                  <input type="number" name="zipcode" class="form-control" placeholder="Zip Code">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                  <input type="date" name="dob" class="form-control" placeholder="Date of Birth">
                               </div>
                               <div class="form-group">
                                  <input type="text" name="state" class="form-control" placeholder="State">
                               </div>
                               <div class="form-group">
                                  <textarea  name="address" class="form-control textarea_fld" placeholder="Address..."></textarea>
                               </div>
                            </div>
                         </div>
                         <div class="additional_info">
                            <div class="additional_info_title">
                               <h5>Additional Personal Information</h5>
                               <p>Politically Exposed Person?</p>
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <div class="radio_btn">
                                        <p>
                                           <input type="radio" id="test1" name="political_exposed" value="Yes" checked>
                                           <label for="test1">Yes</label>
                                        </p>
                                        <p>
                                           <input type="radio" id="test2" name="political_exposed" value="No">
                                           <label for="test2">No</label>
                                        </p>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <input type="text" name="industry" class="form-control" placeholder="Industry" required>
                                  </div>
                                  <div class="form-group">
                                     <select class="adjust_style" name="worth" >
                                        <option data-display="Select net worth"></option>
                                        <option value="Less than 10 Euro">Less than 10 Euro</option>
                                        <option value="More than 40 Euro">More than 40 Euro</option>
                                     </select>
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <input type="text" name="occupation" class="form-control" placeholder="Current Occupation" required>
                                  </div>
                                  <div class="form-group">
                                     <select class="adjust_style" name="income">
                                        <option data-display="Select your annual income"></option>
                                        <option value="100000 Euro">100000 Euro</option>
                                        <option value="200000 Euro">200000 Euro</option>
                                        <option value="300000 Euro">300000 Euro</option>
                                        <option value="400000 Euro">400000 Euro</option>
                                        <option value="500000 Euro">500000 Euro</option>
                                     </select>
                                  </div>
                                  <div class="form-group">
                                     <input type="text" name="trade" class="form-control" placeholder="Expected yearly volume of trade" required>
                                  </div>
                               </div>
                            </div>

                            <div class="last_checkboxes">
                               <label class="container_check">Business activities / Savings / Earnings
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                               </label>
                               <label class="container_check">Stock sale
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                               </label>
                               <label class="container_check">Sale of real estate
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                               </label>
                               <label class="container_check">Donation
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                               </label>
                               <label class="container_check">Inherited
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                               </label>
                               <label class="container_check">Fortune
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                               </label>
                               <label class="container_check">Cryptocurrency
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                               </label>
                               <label class="container_check">Other Origin
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                               </label>
                            </div>
                            <div class="submit_btn">
                               <button type="buton">Submit</button>
                            </div>
                         </div>
                      </div>
                     </form>
                   </div>
                </div>

             </div>
          </div>
       </div>
    </div>
 </section>
@endsection

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
                   <div class="identity_verification">
                      <div class="verification_title">
                         <div class="make_circle">
                            <i class="fa fa-id-card"></i>
                         </div>
                         <h5>Identity Verification</h5>
                      </div>
                      <div class="steps">
                         <div class="align_with_next">
                            <div class="show_hide_buttons">
                                <form method="post" action="verify" enctype="multipart/form-data" >
                                    @csrf
                               <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                               <p>Front and back photo of the identity</p>
                               <input type="file" name="front_image" class="btn" accept="image/*" required><i class="fa fa-cloud-upload"></i> Browse Front</button>
                               <input type="file" name="back_image" class="btn" accept="image/*" required><i class="fa fa-cloud-upload"></i> Browse Back</button>
                            </div>
                            <div class="verify_custom align_to_right">
                               <button type="submit" class="btn verf_next">Verify</button>
                            </div>
                        </form>
                         </div>
                      </div>
                   </div>
                   <div class="identity_verification selfie">
                      <div class="verification_title disable">
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
                      <div class="verification_title disable">
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
                      <div class="verification_title disable">
                         <div class="make_circle">
                            <i><img src="{{ asset('assetes/images/msg.png') }}" alt=""></i>
                            <h5>SMS token</h5>
                         </div>
                         <div class="verify_custom align_to_right">
                            <button type="submit" class="btn verf_next">Verify</button>
                         </div>
                      </div>
                   </div>
                   <div class="identity_verification selfie">
                      <div class="verification_title disable">
                         <div class="make_circle">
                            <i><img src="{{ asset('assetes/images/last.png') }}" alt=""></i>
                            <h5>CryptoLocalSHIP</h5>
                         </div>
                         <div class="verify_custom align_to_right">
                            <button type="submit" class="btn verf_next">Verify</button>
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

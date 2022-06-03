<style>
    #my_camera{
        width: 320px;
        height: 240px;
        /* border: 1px solid black; */
    }
	</style>
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
                            <button type="submit" class="btn verf_next">Verified</button>
                         </div>
                      </div>
                   </div>
                   <div id="my_camera"></div>
                   <input type=button value="Take Snapshot" onClick="take_snapshot()">
                   {{-- <input type=button value="Save Snapshot" onClick="saveSnap()"> --}}
                   <div id="results"  ></div>
                   <div class="identity_verification selfie">
                      <div class="verification_title">
                         <div class="make_circle">
                            <i><img src="{{ asset('assetes/images/selfie.png') }}" alt=""></i>
                            <h5>Selfie Verification</h5>
                         </div>
                      </div>
                      <div class="steps">
                         <div class="align_with_next">
                            <form method="post" action="saveselfie" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="admin_verif_status" value="0">
                               <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

                            <div class="show_hide_buttons">
                               <p>Take selfie or upload </p>
                               <button type="button" name="step2_image" value="Configure" onClick="configure()" class="btn"><span><img src="{{ asset('assetes/images/selfie.png') }}" alt=""></span> Selfie</button>
                               <input type="file" name="step2_image" class="btn" accept="image/*" required><i class="fa fa-cloud-upload"></i> Browse</button>
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
                            <i><img src="{{ asset('assetes/images/page.png')}}" alt=""></i>
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
                            <i><img src="{{ asset('assetes/images/msg.png')}}" alt=""></i>
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
                            <i><img src="{{ asset('assetes/images/last.png')}}" alt=""></i>
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
<script type="text/javascript" src="{{ asset('webcamjs/webcam.min.js') }}"></script>
<script language="JavaScript">

    // Configure a few settings and attach camera
    function configure(){
        Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );
    }
    // A button for taking snaps


    // preload shutter audio clip
    var shutter = new Audio();
    shutter.autoplay = false;
    shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

    function take_snapshot() {
        // play sound effect
        shutter.play();

        // take snapshot and get image data
        Webcam.snap( function(data_uri) {
            // display results in page
            document.getElementById('results').innerHTML =
                '<img id="imageprev" src="'+data_uri+'"/>';
        } );

        Webcam.reset();
    }

    function saveSnap(){
        // Get base64 value from <img id='imageprev'> source
        var base64image =  document.getElementById("imageprev").src;

         Webcam.upload( base64image, 'upload.php', function(code, text) {
             console.log('Save successfully');
             //console.log(text);
        });

    }
</script>

@extends('Front_layout.nav')
@section('content')
<section class="dashboard">
    <div class="row m-0">
      @include('user.sidebar')
       <div class="col-md-10 p-0">
          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
             <div class="main_title">

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
             <div class="main">

              <form class="needs-validation" method="POST" enctype="multipart/form-data" action="submitticket">
                    @csrf
                     <center><h1>Support Tickets</h1></center>
                     <input type="hidden" value="{{ Auth::user()->id }}" name="user_from">
                     <input type="hidden" name="ticket_no" id="randomCode" class="form-control" placeholder="Click here"  required>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Subject</label>
                        <input type="text" class="form-control" name="subject" id="validationCustom04" placeholder="Subject" onClick="generateRandomString(10)" required>
                        <div class="invalid-feedback">
                          Enter Subject.
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label >Attach File</label>
                        <input type="file"  name="ticket_file" required>
                        <div class="invalid-feedback">
                          upload File.
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Message</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"  id="validationCustom03" placeholder="Message" required></textarea>
                        <div class="invalid-feedback">
                          Enter Message.
                        </div>
                      </div>
                      <div class="verify_custom align_to_right">
                        <button type="submit" class="btn verf_next">Send</button>
                     </div>

                  </form>


                  <script>
                  (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      var forms = document.getElementsByClassName('needs-validation');
                      // Loop over them and prevent submission
                      var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                          if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                          }
                          form.classList.add('was-validated');
                        }, false);
                      });
                    }, false);
                  })();
                  </script>
              </form>
            </div>
          </div>
       </div>
    </div>
 </section>



<script type="text/javascript">

    function generateRandomString(length) {
        var text = "";
        var possible = "abcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < length; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

            document.getElementById("randomCode").value = text;

    }

</script>
@endsection

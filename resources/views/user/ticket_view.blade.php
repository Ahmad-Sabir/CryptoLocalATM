
  @extends('Front_layout.nav')
  @section('content')
  <section class="dashboard">
      <div class="row m-0">
         @include('user.sidebar')
         <div class="col-md-10 p-0">
            <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
               <div class="main_title">
                <h3>{{ Auth::user()->name }}</h3>
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
               @foreach($chat as $datum)
               <div class="chatbox-holder">
                <div class="chatbox">
                    <h2 style="text-align: center"> {{$datum->subject}}</h2>
                  <div class="chat-messages">
                    <div class="message-box-holder">
                      <div class="message-sender">
                         {{ Auth::user()->name }}
                       </div>
                      <div class="message-box message-partner">
                        {{$datum->message}}
                      </div>
                    </div>

                    <div class="message-box-holder">
                      <div class="message-box">
                       Yes.
                      </div>
                    </div>
                  </div>

                  <div class="chat-input-holder">
                    <textarea class="chat-input"></textarea>
                    <input type="submit" value="Send" class="message-send">
                  </div>
 @endforeach
                </div>
              </div>
            </div>
         </div>
      </div>
   </section>
  @endsection

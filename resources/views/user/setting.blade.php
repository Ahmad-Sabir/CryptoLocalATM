@extends('Front_layout.nav')
@section('content')
<section class="dashboard">
    <div class="row m-0">
      @include('user.sidebar')
       <div class="col-md-10 p-0">
          <div class="detail_section" data-aos="zoom-in" data-aos-duration="1000">
             <div class="main_title">
                <h3>Setting</h3>
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

             <div class="settings">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Password</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Login History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Two Factory Authorization </a>
                  </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                     <div class="password_tab">
                        <div class="title_setting">
                           <h5>Change Password</h5>
                           <p>Fill the fields below to change the password</p>
                        </div>
                        <div class="setting_fields">
                            <form>
                              <div class="row">
                              <!-- <div class="col-md-6">
                                 <div class="form-group">
                                   <label for="">Email address</label>
                                   <input type="password" class="form-control" placeholder="*****">
                                 </div>
                              </div> -->

                                 <div class="col-md-6 pl-0">
                                    <div class="form-group">
                                      <label>Enter Old Password</label>
                                      <div class="input-group" id="show_hide_password">
                                        <input class="form-control" type="password" placeholder="*****">
                                        <div class="input-group-addon">
                                          <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                      </div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Enter New Password</label>
                                      <div class="input-group" id="show_hide_password2">
                                        <input class="form-control" type="password" placeholder="*****">
                                        <div class="input-group-addon">
                                          <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                      </div>
                                     </div>
                                 </div>
                                 <div class="col-md-6 pl-0">
                                    <div class="form-group">
                                      <label>Confirm Password</label>
                                      <div class="input-group" id="show_hide_password3">
                                        <input class="form-control" type="password" placeholder="*****">
                                        <div class="input-group-addon">
                                          <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>
                                      </div>
                                     </div>
                                 </div>
                                 </div>
                                 <div class="save_btn">
                                    <button type="button">Save Changes</button>
                                 </div>
                              </form>

                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                     <div class="history_tab">
                        <div class="title_setting">
                           <h5>Login History</h5>
                        </div>
                        <div class="history_table">
                           <table class="table mb-4 table-hover">
                              <tbody>
                                <tr>
                                  <td>June 12, 2020 5:59 AM</td>
                                  <td>192.25.3.125.200</td>
                                  <td>Lahore| Pakistan</td>
                                  <td><p class="success_text">Successful</p></td>
                                </tr>
                                <tr>
                                  <td>June 12, 2020 5:59 AM</td>
                                  <td>192.25.3.125.200</td>
                                  <td>Lahore| Pakistan</td>
                                  <td><p class="success_text">Successful</p></td>
                                </tr>
                                <tr>
                                  <td>June 12, 2020 5:59 AM</td>
                                  <td>192.25.3.125.200</td>
                                  <td>Lahore| Pakistan</td>
                                  <td><p class="success_text">Successful</p></td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="delete_link">
                               <a href="#">Delete All History</a>
                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                     <div class="2factor">
                        <div class="title_setting">
                           <h5>Two-factor Authorization</h5>
                           <p>Two-factor authorization allows you to significantly <br>
                               enhance the protection of your account. </p>
                        </div>
                        <div class="toggle_button">
                            <span class="switch">
                                <input type="checkbox" class="switch" id="switch-id" checked>
                                <label for="switch-id">Disable two-factor Authorization</label>
                              </span>
                        </div>
                        <div class="save_btn">
                                    <button type="button">Save Changes</button>
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

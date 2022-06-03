@extends('admin.layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<style>
   img.modal-img {
  cursor: pointer;
  transition: 0.3s;
 }
 img.modal-img:hover {
  opacity: 0.7;
 }
  .img-modal {
  display: none;
  position: fixed;
  z-index: 99999;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.9);
 }
.img-modal img {
  margin: auto;
  display: block;
  width: auto;
  /* max-width: 700%; */
  height: auto;
 }
 .img-modal div {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
 }
 .img-modal img, .img-modal div {
  animation: zoom 0.6s;
 }
 .img-modal span {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
  cursor: pointer;
 }
 @media only screen and (max-width: 700px) {
  .img-modal img {
    width: 100%;
  }
 }
 @keyframes zoom {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
 }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="set_form">
   <div class="card">
      <div class="card-header">
         <h5 class="title">User Status</h5>
      </div>
      @if(Session::has('message'))
      <p class="alert alert-info">{{ Session::get('message') }}</p>
      @endif
      <form method="post" action="{{route('updateVerif',[$data->id])}}" autocomplete="off" enctype="multipart/form-data">
         <div class="card-body">
            @csrf
              <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputEmail4">Name</label>
                  <input type="text" name="fname" value="{{$data->fname}}" class="form-control" >
               </div>
               <div class="form-group col-md-6">
                  <label for="inputEmail4">Date Of Birth</label>
                  <input type="date" name="dob" value="{{$data->dob}}" class="form-control" >
               </div>
               <div class="form-group col-md-6">
                  <label for="inputEmail4">Nationality</label>
                  <input type="text" name="nationality" value="{{$data->nationality}}"  class="form-control">
               </div>
               <div class="form-group col-md-6">
                  <label for="inputEmail4">City</label>
                  <input type="text" name="city" value="{{$data->city}}" class="form-control" >
               </div>
               <div class="form-group col-md-6">
                  <label for="inputEmail4">ZipCode</label>
                  <input type="number" name="zipcode" value="{{$data->zipcode}}" class="form-control">
               </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Address</label>
               <input type="text" name="address" value="{{$data->address}}"  class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">State</label>
               <input type="text" name="state" value="{{$data->state}}"  class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Occupation</label>
               <input type="text" name="occupation" value="{{$data->occupation}}"  class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Industry</label>
               <input type="text" name="industry" value="{{$data->industry}}"  class="form-control" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Income</label>
               <input type="text" name="income" value="{{$data->income}}"  class="form-control" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Worth</label>
               <input type="text" name="worth" value="{{$data->worth}}"  class="form-control" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Trade</label>
               <input type="text" name="trade" value="{{$data->trade}}"  class="form-control" >
            </div>
        </div>

            <div class="row">
               <div class="col-md-7">
                  <div class="verification_steps">
                     <div class="verification">
                        <div class="verf_title">
                           <h4>Shipping verification</h4>

                        </div>
                        <div class="steps">
                           <p class="step_list making_space">Step 1<span class="red">*</span></p>
                           <p>Front Image </p>
                           <div class="dummy_images">

                              <img src="{{asset('assetes/verification/step1/front/'.$step1->front_image)}}" alt="" class="img-fluid w-100 modal-img">
                           </div>
                           <p>Back Image </p>
                           <div class="dummy_images">

                              <img src="{{asset('assetes/verification/step1/back/'.$step1->back_image)}}" alt="" class="img-fluid w-100 modal-img">
                           </div>
                        </div>
                        <div class="steps">
                           <p class="step_list making_space">Step 2<span class="red">*</span></p>
                           <p>Selfie </p>
                           <div class="dummy_images">
                            <img src="{{asset('assetes/verification/step2/'.$step2->step2_image)}}" alt="" class="img-fluid w-100 modal-img">

                           </div>
                        </div>
                        <div class="steps">
                           <p class="step_list making_space">Step 3<span class="red">*</span></p>
                           <p>Proof of residence </p>
                           <div class="dummy_images">
                            <img src="{{asset('assetes/verification/step3/'.$step3->residence)}}" alt="residence" class="img-fluid w-100 modal-img">

                           </div>
                        </div>
                        {{-- <div class="steps">
                           <p class="step_list making_space">Step 4<span class="red">*</span></p>
                           <p>SMS token </p>
                           <div class="verf_btn blank_btn">
                              <input type="number" name="" value="" placeholder="2522245" readonly>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
               <div class="col-md-5 d-flex align-items-center">
                  <div class="card-footer manage_btn">
                    <input type="hidden" name="admin_verif_status" value="1">

                     <button type="submit" class="btn btn-fill btn-primary">Approve</button>
                     <button  class="btn btn-fill btn-danger">Reject</button>

                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>

<script>
   $('img.modal-img').each(function() {
    var modal = $('<div class="img-modal"><span>&times;</span><img /><div></div></div>');
    modal.find('img').attr('src', $(this).attr('src'));
    if($(this).attr('alt'))
      modal.find('div').text($(this).attr('alt'));
    $(this).after(modal);
    modal = $(this).next();
    $(this).click(function(event) {
      modal.show(300);
      modal.find('span').show(0.3);
    });
    modal.find('span').click(function(event) {
      modal.hide(300);
    });
  });
  $(document).keyup(function(event) {
    if(event.which==27)
      $('.img-modal>span').click();
  });
</script>
@endsection

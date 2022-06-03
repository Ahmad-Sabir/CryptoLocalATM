@extends('admin.layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMIN Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in as admin') }} --}}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="row">
        <div class="col-lg-4">
           <div class="btn card card-chart">
               <div class="card-header">
                     <a href="#">
                    <h5 class="card-category text-primary">Total Orders</h5>
                    @php
                        $users = DB::table('order_models')->count();
                    @endphp
                    <h3 class="card-title counter"><i class="tim-icons icon-single-02 text-primary"></i>  {{ $users }}</h3>
                </a>
                    </div>
                </div>
        </div>
   
    <div class="col-lg-4">
           <div class="btn card card-chart">
               <div class="card-header">
               <a href="#">
                    <h3 class="card-category text-info">Total Clients</h3>
                    @php
                        $client = DB::table('users')->count();
                    @endphp
                    <h3 class="card-title counter"><i class="tim-icons icon-single-02 text-info"></i> {{ $client }}</h3>
                    </a>
                    </div>
                </div>
        </div>
        
         <div class="col-lg-4">
           <div class="btn card card-chart">
               <div class="card-header">
              <a href="#">
                <div class="card-header">

                    <h5 class="card-category text-success">Payied Shiping order</h5>
                    <h3 class="card-title counter"><i class="tim-icons icon-send text-success"></i>6</h3>

                </div>
            </a>
                    </div>
                </div>
        </div>
        
        <div class="col-lg-4">
           <div class="btn card card-chart">
               <div class="card-header">
             <a href="#">
                <div class="card-header">

                    <h5 class="card-category text-warning">unpaid Order</h5>
                    @php
                    $order = DB::table('order_models')->where('status','=','unpaid')->count();
                @endphp
                    <h3 class="card-title counter"><i class="tim-icons icon-chart-bar-32 text-warning"></i> {{ $order }}</h3>

                </div>

                </a>
                    </div>
                </div>
        </div>
        
          <div class="col-lg-4">
           <div class="btn card card-chart">
               <div class="card-header">
                       <a href="#">
                <div class="card-header">

                    <h5 class="card-category text-warning">redeemed orders</h5>
                    <h3 class="card-title counter"><i class="tim-icons icon-chart-bar-32 text-warning"></i>37</h3>

                </div>

                </a>
                
                    </div>
                </div>
        </div>
        
           <div class="col-lg-4">
           <div class="btn card card-chart">
               <div class="card-header">
                       <a href="#">
                <div class="card-header">

                    <h5 class="card-category text-success">vouchers sent waiting to be redeemed</h5>
                    <h3 class="card-title counter"><i class="tim-icons icon-send text-success"></i>31</h3>

                </div>
            </a>
                    </div>
                </div>
        </div>
        
       
      
      
    
        
      
        
        
       
       
    </div>
@endsection

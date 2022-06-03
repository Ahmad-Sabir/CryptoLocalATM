
@extends('admin.layouts.app')

@section('content')
@if (session('status'))

            <div class="alert alert-success">

                {{ session('status') }}

            </div>

            @endif

            @if(isset($datas))
            @foreach($datas as $data)
    <div class="set_form">
        <div class="card">
            <div class="card-header">
                <div class="col-8">
                    <h2 class="card-title">Fees</h2>
                </div>
            </div>
            <form method="post" action="{{route('update',[$data->id])}}" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><b>Admin fee</b></label>
                            <input type="text" name="admin_fee" class="form-control" value= "{{$data->admin_fee}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Shiping fee</label>
                            <input type="text" name="ship_fee" class="form-control"  value= "{{$data->ship_fee}}" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><b>Low minning fee</b></label>
                            <input type="text" name="low_fee" class="form-control" value= "{{$data->low_fee}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Medium Mining fee</label>
                            <input type="text" name="medium_fee" class="form-control"  value= "{{$data->medium_fee}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><b>Normal mining fee</b></label>
                            <input type="text" name="normal_fee" class="form-control" value= "{{$data->normal_fee}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">High Mining fee</label>
                            <input type="text" name="high_fee" class="form-control"  value= "{{$data->high_fee}}"  >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Maximum Purchase</label>
                            <input type="text" name="maximum_purchase" class="form-control"   value= "{{$data->maximum_purchase}}" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Minimum Purchase</label>
                            <input type="text" name="minimum_purchase" class="form-control"  value= "{{$data->minimum_purchase}}" >
                        </div>
                    </div>



                    <div class="card-footer pull-right">
                        <button type="submit" class="btn btn-fill btn-primary">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    @endforeach
    @endif
@endsection

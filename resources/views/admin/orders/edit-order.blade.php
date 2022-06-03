@extends('admin.layouts.app')
@section('content')
    <div class="set_form">
        <div class="card">

            <div class="card-header">
                <h5 class="title">Order Edit</h5>
            </div>
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form method="post" action="{{route('updateorder',[$data->id])}}" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Order ID</label>
                            <input type="text" name="order_id" value="{{$data->order_id}}" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Product Name</label>
                            <input type="text" name="product_name" value="{{$data->product_name}}" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Is Active</label>
                            <input type="text" name="is_active" value="{{$data->is_active}}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="card-footer pull-right">
                    <button type="submit" class="btn btn-fill btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection

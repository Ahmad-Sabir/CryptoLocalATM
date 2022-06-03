@extends('admin.layouts.app')

@section('content')


    <div class="set_form">
        <div class="card">

            <div class="card-header">
                <h5 class="title">Code Edit</h5>
            </div>
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <form method="post" action="{{route('updateCode',[$data->id])}}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" value="{{$data->name}}" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Voucher</label>
                            <input type="text" name="voucher" value="{{$data->voucher}}" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">QR Code</label>
                            <input type="text" name="qr_code" value="{{$data->qr_code}}" class="form-control">
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

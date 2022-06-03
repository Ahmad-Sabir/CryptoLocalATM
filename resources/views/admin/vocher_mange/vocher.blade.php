@extends('admin.layouts.app')

@section('content')


    <div class="set_form">
        <div class="card">
 <div class="col-4 text-left">
                <a href="{{ route('vocher.index') }}" class="btn btn-sm btn-primary">Back</a>
           </div>
            <div class="card-header">
                <h5 class="title">Vocher </h5>
            </div>
                <div class="card-body">
<form method="post" action="{{route('Addvocher')}}" enctype="multipart/form-data">
                     @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="order"><b>Vocher Id </b></label>
                                <input type="number" name="vocher_id" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="product">Client  Address</label>
                                <input type="text" name="client_address" class="form-control"   >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="product">Shipping amount </label>
                                <input type="number" name="shipping_amount" class="form-control"   >
                            </div>

                        <div class="form-group col-md-6">
                            <label for="product">Created Date  </label>
                            <input type="date" name="created_date" class="form-control"   >
                        </div>
                        </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="product">Experir Date</label>
                            <input type="date" name="experir_date " class="form-control"   >

                        </div>
                    <div class="form-group col-md-6">
                        <label for="product">Using Date </label>
                        <input type="date" name="using_date" class="form-control"   >
                    </div>
                </div>
                <div class="card-footer pull-right">
                    <button type="submit" class="btn btn-fill btn-primary">save</button>
                </div>
            </div>

                </form>
        </div>
    </div>

@endsection

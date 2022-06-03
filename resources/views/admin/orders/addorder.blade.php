@extends('admin.layouts.app')

@section('content')


    <div class="set_form">
        <div class="card">
 <div class="col-4 text-left">
                <a href="{{ route('order.index') }}" class="btn btn-sm btn-primary">Back</a>
           </div>
            <div class="card-header">
                <h5 class="title">Add Order</h5>
            </div>
                <form method="post" action="{{route('createorder')}}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="order"><b>Order Id</b></label>
                                <input type="text" name="order_id" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="product">Product Name</label>
                                <input type="text" name="product-name" class="form-control"   >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="status">Order Status</label><br><br>
                                <select name="subscription" class="form-group">
                                    <option value="">Select values</option>
                                    <option value="active">Active</option>
                                    <option value="disactive">Disactive</option>

                                </select>
                            </div>
                    </div>
                    <div class="card-footer pull-right">
                        <button type="submit" class="btn btn-fill btn-primary">save</button>
                    </div>
                </form>
        </div>
    </div>

@endsection

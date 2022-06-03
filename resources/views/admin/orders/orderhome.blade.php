@extends('admin.layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<style>

.card-body {
    overflow-x: scroll;
    overflow-y: hidden;
}
</style>
    <div class="content">
        <div class="row">
            @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Order</h4>
                            </div>

                        </div><div class="col-4 text-left">
 <a href="addorder" class="btn btn-sm btn-primary">Add Order</a>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <table id="myTable" class="text-primary display table tablesorter">
                                <thead class="text-primary">
                                <tr><th scope="col">Order ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">is_active</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">Operations</th>
                                </tr></thead>
                                <tbody>
                                @foreach($data as $datum)
                                    <tr class="custom_color" >
                                        <td>{{$datum->order_id}}</td>
                                        <td>{{$datum->product_name}}</td>
                                        <td>{{$datum->is_active}}</td>
                                        <td>{{$datum->created_at}}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{route('orderEdit',[$datum->id])}}">Edit</a>
                                                    <a class="dropdown-item" href="{{route('orderDelete',[$datum->id])}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

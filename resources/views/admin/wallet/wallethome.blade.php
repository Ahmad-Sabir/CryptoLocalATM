@extends('admin.layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <style>

        .sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a i, .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a i, .off-canvas-sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a i, .off-canvas-sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a i {
            line-height: 32px;
        }

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
                                <h4 class="card-title">Wallet Details</h4>


                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="">
                            <table id="myTable" class="text-primary display table tablesorter">
                                <thead class="text-primary">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Crypto Currency</th>
                                    <th scope="col">Image </th>
                                    <th scope="col">Operation </th>
                                </tr>
                            </thead>
                                <tbody>
                                @foreach($data as $datum)
                                    <tr class="custom_color" >
                                        <td>{{$datum->name}}</td>
                                        <td>{{$datum->currency}}</td>
                                        <td width="10%"><img src="{{ asset('assetes/wallet/'.$datum->image) }}"></td>




                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{url('editwallet/'. $datum->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="{{url('deletewallet/'. $datum->id)}}">Delete</a>
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

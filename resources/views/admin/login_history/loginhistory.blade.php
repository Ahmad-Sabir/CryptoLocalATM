@extends('admin.layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'users'])

@section('content')



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
                                <h4 class="card-title">Login History</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="">
                            <table class="table tablesorter " id="myTable">
                                <thead class=" text-primary">
                                <tr class="custom_color">
                                    <th scope="col">User Id</th>
                                    <th scope="col">Login Time</th>
                                    <th scope="col">IP Address</th>
                                    <th scope="col">Login Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <?php $clientIP = request()->ip();
                                    ?>
                                @foreach($history as $datum)

                                    <tr class="custom_color" >
                                    <td>{{$datum->user_id}}</td>
                                    <td>{{$datum->login_time}}</td>
                                    <td>{{ $clientIP }}</td>
                                    <td>{{$datum->login_status}}</td>

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

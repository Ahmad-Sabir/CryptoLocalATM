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
                                <h4 class="card-title">Details</h4>
                            </div>

                        </div>
 <!--                       <div class="col-4 text-left">-->
 <!--<a href="addorder" class="btn btn-sm btn-primary"></a>-->
 <!--                           </div>-->
                    </div>
                    <div class="card-body">
                        <div class="">
                            <table id="myTable" class="text-primary display table tablesorter">
                                <thead class="text-primary">
                                <tr><th scope="col">Vocher_id</th>
                                    <th scope="col">client_address</th>
                                    <th scope="col">'shipping_amount</th>
                                    <th scope="col">created_date</th>
                                    <th scope="col">experir_date</th>
                                    <th scope="col">using_date</th>
                                    <th scope="col">Operation</th>
                                </tr></thead>
                                <tbody>
                                @foreach($data1 as $datum)
                                    <tr class="custom_color" >
                                        <td>{{$datum->vocher_id}}</td>
                                    @foreach($area as $ikram)
                                        <td>{{$ikram->address}}</td>
                                        @endforeach
                                         <td>{{$datum->shipping_amount}}</td>
                                        <td>{{$datum->created_date}}</td>
                                        <td>{{$datum->experir_date}}</td>
                                        <td>{{$datum->using_date}}</td>
                                        <td class="text-right">
                                            <a class="btn btn-warning" href="{{route('Delete',[$datum->id])}}"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
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

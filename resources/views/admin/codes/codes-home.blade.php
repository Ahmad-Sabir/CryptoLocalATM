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
                                <h2 class="card-title">Codes</h2>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{route('addCode')}}" class="btn btn-sm btn-primary">Add Code</a>
                                    <form action="{{route('addCSVfile')}}" method="POST" enctype='multipart/form-data'>
                                    @csrf
                                    <input required type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Add CSV</button>
                                    <a class="btn btn-sm btn-primary"  href="{{ route('export') }}">Export Demo</a>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="">
                            <table class="table tablesorter " id="myTable">
                                <thead class=" text-primary">
                                <tr class="custom_color">
                                    <th scope="col">Serial Number</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Voucher</th>
                                    <th scope="col">QR Code</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Operation</th>
                                </tr></thead>
                                <tbody>
                                @foreach($data as $datum)

                                    <tr class="custom_color" >
                                    <td>{{$datum->id}}</td>
                                    <td>{{$datum->name}}</td>
                                    <td>{{$datum->voucher}}</td>
                                    <td>{{$datum->qr_code}}</td>
                                    <td>{{\Carbon\Carbon::parse($datum->created_at)->format('M-D-Y / H:I:S')}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{route('editCode',[$datum->id])}}">Edit</a>
                                                 <a class="dropdown-item" href="{{route('deleteCode',[$datum->id])}}">Delete</a>
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

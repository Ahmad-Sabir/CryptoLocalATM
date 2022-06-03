
@extends('admin.layouts.app')

@section('content')
@if (session('status'))

            <div class="alert alert-success">

                {{ session('status') }}

            </div>

            @endif

@if(isset($data))


    <div class="set_form">
        <div class="card">
            <div class="card-header">
                <h5 class="title"></h5>
            </div>
            <form method="post" action="{{route('updatewallet',[$data1->id])}}" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><b>Name</b></label>
                            <input type="text" name="name" class="form-control" value= "{{$data1->name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cars"><b>Select Crypto Currency</b></label>

                                <select name="currency" id="currency"class="form-control">
                                    @foreach($data as $datum)
                                    <option value="{{$datum->name}}">{{$datum->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                           <label for="files"><b>Select image files: </b></label>
                            <input type="file" id="image" name="image" required><br><br>
                        </div>
                    <div class="card-footer pull-right">
                        <button type="submit" class="btn btn-fill btn-primary">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endif
@endsection

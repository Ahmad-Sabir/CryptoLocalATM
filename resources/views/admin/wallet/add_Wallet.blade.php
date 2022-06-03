
@extends('admin.layouts.app')

@section('content')
@if (session('status'))

            <div class="alert alert-success">

                {{ session('status') }}

            </div>

            @endif

    <div class="set_form">
        <div class="card">
            <div class="card-header">
                <div class="col-8">
                    <h4 class="card-title">Add Wallet</h4>


                </div>
                   </div>
            <form method="post" action="wallet" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4"><b>Name of Wallet</b></label>
                            <input type="text" name="name" class="form-control" required>
                        </div><br><br><br>
                        <div class="form-group col-md-6">

                                <label for="cars"><b>Select Crypto Currency</b></label>

                                <select name="currency" id="currency"class="form-control">
                                    @foreach($data as $datum)
                                  <option value="{{$datum->name}}">{{$datum->name}}</option>

                                  @endforeach
                                </select>
                            </div>
                             <div class="form-group col-md-6">
                             <label for="files"><b>Select image</b></label><br>
                             <input type="file" id="image" name="image" required>
                             </div>

                              </form>


                    </div>





                    <div class="pull-right">
                        <button type="submit" class="btn btn-fill btn-primary">Add Wallet</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

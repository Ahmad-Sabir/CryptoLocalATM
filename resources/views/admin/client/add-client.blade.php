    @extends('admin.layouts.app')
    @section('content')
        <div class="set_form">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Add New User</h5>
                </div>
                <form method="post" action="{{route('createClient')}}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="full name">First Name</label>
                                <input type="text" name="name" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last">Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" required  >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Country</label>
                                <input type="text" name="country" class="form-control" placeholder="Country" required  >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required  >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date of birh">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required  >
                            </div>
                        </div>

                    </div>
                    <div class="card-footer pull-right">
                        <button type="submit" class="btn btn-fill btn-primary">Add User</button>
                    </div>
                </form>
            </div>
        </div>

    @endsection


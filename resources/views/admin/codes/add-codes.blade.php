@extends('admin.layouts.app')

@section('content')
    <div class="set_form">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Add Code</h5>
            </div>
            <form method="post" action="{{route('createCode')}}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="store_name">Name</label>
                            <input type="text" name="name" id="uu" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Voucher</label>
                            <input type="text" name="voucher" id="randomCode" class="form-control" required>
                            <input type="button" class="title" value="Create Random Code" onClick="generateRandomString(15)">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="store_name">QR Code</label>
                            <input type="text" name="qr_code" id="random_qr_Code" class="form-control" required>
                        </div>

                    </div>

                <div class="card-footer pull-right">
                    <button type="submit" class="btn btn-fill btn-primary">save</button>
                </div>
            </form>
        </div>
    </div>


    <script type="text/javascript">

        function generateRandomString(length) {
            var text = "";
            var possible = "abcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < length; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));

                document.getElementById("randomCode").value = text;
                var text_cap = text.toUpperCase();
                document.getElementById("random_qr_Code").value = text_cap;

        }

    </script>


@endsection

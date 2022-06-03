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
                                <h4 class="card-title">Chats</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="">
                            <table class="table tablesorter " id="myTable">
                                <thead class=" text-primary">
                                <tr class="custom_color">
                                    <th scope="col">Ticket Number</th>
                                    <th scope="col">User From</th>
                                    <th scope="col">User To</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Show Chat</th>
                                </tr></thead>
                                <tbody>
                                @foreach($chats as $datum)

                                    <tr class="custom_color" >
                                    <td>{{$datum->ticket_no}}</td>
                                    <td>{{$datum->user_from}}</td>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{$datum->subject}}</td>
                                    <td>{{\Carbon\Carbon::parse($datum->created_at)->format('M-D-Y / H:I:S')}}</td>
                                    <td><a href="{{ route('chat.show', [$datum->ticket_no])}}" class="btn btn-sm btn-primary">Show Chat</a></td>
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

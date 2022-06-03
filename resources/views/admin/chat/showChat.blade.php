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
                                <h4 class="card-title">Chat View</h4
                            </div>
                        </div>
                            <div class="col-4 text-right">
                                 <a href="{{ route('chat.index') }}" class="btn btn-sm btn-primary">Back</a>
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
                                    <th scope="col">Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($chat as $datum)

                                    <tr class="custom_color" >
                                    <td>{{$datum->ticket_no}}</td>
                                    <td>{{$datum->user_from}}</td>
                                    <td>{{$datum->user_to}}</td>
                                    <td>{{$datum->subject}}</td>
                                    <td>{{$datum->message}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <br>
                        <h2>Enter your reply</h2>
                        <form action="/adminReply" method="post">
                            @csrf
                            <div class="form-group col-md-6">
                                <textarea name="message" id="" cols="100" rows="5"></textarea>
                            </div>
                            <input type="hidden" name="ticket_no" value="{{$chat[0]->ticket_no}}">
                            <input type="hidden" name="subject" value="{{$chat[0]->subject}}">
                            <input type="hidden" name="user_from" value="{{$chat[0]->user_from}}">
                            <input type="hidden" name="user_to" value="{{$chat[0]->user_to}}">
                            <input type="hidden" name="parent_id" value="{{$chat[1]->parent_id}}">
                            <div class="card-footer">
                                <button type="submit" class="btn btn-fill btn-primary">Reply</button>
                            </div>
                        </form>
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

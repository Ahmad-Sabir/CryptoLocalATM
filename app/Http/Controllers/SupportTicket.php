<?php

namespace App\Http\Controllers;
use App\ChatModel;
use Illuminate\Http\Request;

class SupportTicket extends Controller
{
    public function purchase_order()
    {
        return view('user.order');
    }
    public function add_ticket()
    {
        return view('user.add_ticket');
    }
    public function ticket_view($ticket_no)
    {
    $chat = ChatModel::where('ticket_no', $ticket_no)->get();
    return view('user.ticket_view', compact('chat'));
        }


    public function support_ticket(){
        $support = ChatModel::where('user_from', auth()->user()->id)->get();
        return view('user.support_ticket' ,compact('support'));
    }
    public function submitticket(Request $request){

        $chat = new ChatModel;
        $chat->ticket_no = $request->input('ticket_no');
        $chat->user_from = $request->input('user_from');
        $chat->user_to = 1;
        $chat->subject = $request->input('subject');
        $chat->message = $request->input('message');
        $chat->parent_id =0;
        // $request->validate([
        // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);

        $fileName = time().'.'.$request->ticket_file->extension();
        $request->ticket_file->move(public_path('uploads'), $fileName);
        $chat->ticket_file=$fileName;
        $chat->save();

        return redirect()->route('support_ticket')->with('message','submitted successfully');
    }
}

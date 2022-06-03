<?php

namespace App\Http\Controllers;

use App\ChatModel;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chats(){
        $chats = ChatModel::where('parent_id', 0)->get();
        return view('admin.chat.chatListing',compact('chats'));
    }

    public function showChat($ticket_no){
        $chat = ChatModel::where('ticket_no', $ticket_no)->get();
        return view('admin.chat.showChat', compact('chat'));
    }

    public function adminReply(Request $request){
        $chat = new ChatModel;
        if($request['user_from'] == auth()->user()->id){
            $chat->user_from = auth()->user()->id;
            $chat->user_to = $request['user_to'];
        }else{
            $chat->user_from = $request['user_to'];
            $chat->user_to = auth()->user()->id;
        }
        $chat->ticket_no = $request->input('ticket_no');
        $chat->message = $request->input('message');
        $chat->subject = $request->input('subject');
        $chat->parent_id = $request->input('parent_id');
        $chat->save();

        return redirect('chats');
    }

    public function submitticket(Request $request){
        $chat = new ChatModel;
        $chat->ticket_no = $request->input('ticket_no');
        $chat->user_from = $request->input('user_from');
        $chat->user_to = 1;
        $chat->subject = $request->input('subject');
        $chat->message = $request->input('message');
        $chat->parent_id =0;
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);
        $chat->save();
        return redirect()->route('support_ticket')->with('message','submitted successfully');
    }
}

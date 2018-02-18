<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use SMKFontAwesome\SMKFontAwesome;
use Validator;

class ContactController extends Controller
{
    public function getIndex() {
        $title  = 'Contact';
        $contact = Contact::first();
        $icons = SMKFontAwesome::getArray();
        $messages = Message::all();
        return view('admin.pages.contact.index')->with('title', $title)->with('contact', $contact)
        ->with('icons', $icons)->with('messages', $messages);
    }

    public function updateContact(Request $request){
        $update = Contact::first();
        $update->sales_number  = $request->input('sales_number');
        $update->whatsup       = $request->input('whatsup');
        $update->email         = $request->input('email');
        $update->address       = $request->input('address');
        $update->icon          = $request->input('font-class');

        $update->update();
        session()->push('m', 'info');
        session()->push('m', 'Updated Successfully');
        return redirect()->back();
    }

    public function deleteMessage($id) {
        $message = Message::find($id);
        if(!is_null($message)) {
            $message->delete();
        }

        session()->push('m', 'danger');
        session()->push('m', 'Deleted Successfully');
        return redirect()->back();
    }

    public function reply($id) {
        $title = 'message-reply';
        $email = Message::find($id);
        return view('admin.pages.reply.index')->with('user_email', $email)->with('title', $title);
    }

    public function sendReply(Request $request) {
        $user_mail = $request->input('user_email');
        $reply     = $request->input('message');

        $rules = [
            'message' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        Mail::send('admin.pages.contact.reply_message', ['user_mail'  => $user_mail, 'reply' => $reply],
            function($message) use ($user_mail, $reply) {
                $message->from('arabea169@gmail.com', 'Mec');
                $message->to($user_mail)->subject('welcome');

            });

        session()->push('m', 'success');
        session()->push('m', 'Message Sent Successfully');
        return redirect()->back();
    }


}

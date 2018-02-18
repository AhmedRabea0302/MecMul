<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use App\Contact;
use App\SocialLink;
use App\ClientsSlider;
use App\HomeAbouta;
use App\Http\Requests;
use Validator;

class ContactController extends Controller
{
    public function returnContact()
    {
        $social_link = SocialLink::first();
        $our_clients = ClientsSlider::all();
        $home_abouts_image = HomeAbouta::first();
        $contact = Contact::first();
        return view('site.pages.contact.index')->with('contact', $contact)->with('social_link', $social_link)
        ->with('our_clients', $our_clients)->with('home_abouts_image', $home_abouts_image);
    }

    public function sendMessage(Request $request)
    {

        $rules = [
            'name' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'email|required',
            'message' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['response' => 'error','data' => $validator->errors()->all()]);
        } else {

            $add = new Message();
            $add->name = $request->input('name');
            $add->phone_number = $request->input('phone_number');
            $add->email = $request->input('email');
            $add->message = $request->input('message');

            $add->save();
            return response()->json(['response' => 'success','data' => 'Send Successfully']);

        }
    }

}
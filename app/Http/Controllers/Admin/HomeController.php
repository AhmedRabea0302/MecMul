<?php

namespace App\Http\Controllers\Admin;

use App\Subscriber;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\SocialLink;
use App\Slider;
use App\HomeAbouta;
use App\ClientsSlider;
use Validator;
use App;
use Session;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function setLang($locale)
    {
        if(session('language') == ''){
            app()->setLocale('en');
            session('language', 'en');
        }
        session()->put('language',$locale);

        return back();
    }
    public function getIndex() {
        $title = '';
        $social_links = SocialLink::first();
        $selectSlider = Slider::all();
        $update_home_about = HomeAbouta::first();
        $all_clients  = ClientsSlider::all();
        $subscribers  = Subscriber::all();

        return view('admin.pages.home.index')->with('title', $title)->with('social_links', $social_links)
        ->with('selectSlider', $selectSlider)->with('update_home_about', $update_home_about)
        ->with('all_clients', $all_clients)->with('subscribers', $subscribers);
    }

    public function addSocialLinks(Request $request){
        $update = SocialLink::first();

        $rules = [
            'facebook' => 'required|url',
            'twitter'  => 'required|url',
            'gmail'    => 'required|url'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {

            $update->facebook = $request->input('facebook');
            $update->twitter  = $request->input('twitter');
            $update->gmail    = $request->input('gmail');

            session()->push('m', 'success');
            session()->push('m', 'Updated Successfully');

            $update->save();
            return redirect()->back();
        }
    }

    public function addSlider(Request $request){
        $add = new Slider();
        $rules = [
            'slider' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {
            $file = $request->file('slider');

            if(!empty($file)) {
                $destination = 'storage/uploads/slider';
                $file_name   = $file->getClientOriginalName();
                $file->move($destination, $file_name);
                $add->image_name = $file_name;
            }

            $add->save();
            session()->push('m', 'success');
            session()->push('m', 'Added Successfully');
            return redirect()->back();
        }

    }

    public function updateSlider(Request $request){
        $update = Slider::find($request->id);

        $file= $request->image;
        if(!empty($file)){
            $destination = 'storage/uploads/slider';
            $file_name   = $file->getClientOriginalName();
            $file->move($destination, $file_name);

            $update->image_name = $file_name;
        }

        $update->update();
        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');
        return redirect()->back();
    }

    public function deleteSlider(Request $request){
        $delete = Slider::find($request->id);
        $delete->delete();
        $path = 'storage/uploads/slider/' . $delete->image_name;
        if($path) {
            unlink($path);
        }
        session()->push('m', 'danger');
        session()->push('m', 'Deleted Successfully');
        return redirect()->back();
    }

    public function updateAbout(Request $request){

        $update_home_about = HomeAbouta::first();
        $file        = $request->file('home_about_image');
        if(!empty($file)) {
            $destination = 'storage/uploads/home_about';
            $file_name   = $file->getClientOriginalName();
            $file->move($destination, $file_name);

            $update_home_about->image_name = $file_name;
        }

        $update_home_about->update();

        $update_home_about->getDetails()->where('lang', 'en')->first()->update([
            'desc'=> $request->input('home_about_paragraph_en'),
        ]);
        $update_home_about->update();

        $update_home_about->getDetails()->where('lang', 'ar')->first()->update([
            'desc' => $request->input('home_about_paragraph_ar'),
        ]);

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');
        return redirect()->back();
    }

    public function addClientImage(Request $request){
        $rules = [
            'upload_slider_image' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        $nicknames = [
            'upload_slider_image' => 'image field'
        ];
        $validator->setAttributeNames($nicknames);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $add  = new ClientsSlider();
            $file = $request->file('upload_slider_image');
            if(!empty($file)) {
                $destination = 'storage/uploads/our_clients_slider';
                $file_name   = $file->getClientOriginalName();
                $file->move($destination, $file_name);
            }

            $add->image_name = $file_name;
            $add->save();
            session()->push('m', 'success');
            session()->push('m', 'Added Successfully');
            return redirect()->back();
        }

    }

    public function updateClientImage(Request $request){
        $update = ClientsSlider::find($request->id);

        $rules = [
            'edit_image_slider' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        $nicknames = [
            'edit_image_slider' => 'Image Field'
        ];
        $validator->setAttributeNames($nicknames);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {
            $file = $request->file('edit_image_slider');
            if(!empty($file)) {
                $destination = 'storage/uploads/our_clients_slider';
                $file_name   = $file->getClientOriginalName();
                $file->move($destination, $file_name);
                $update->image_name = $file_name;
            }


            $update->update();
            session()->push('m', 'success');
            session()->push('m', 'Updated Successfully');
            return redirect()->back();
        }

    }

    public function deleteClientImage(Request $request){
        $delete = ClientsSlider::find($request->id);
        $delete->delete();
        $path = 'storage/uploads/our_clients_slider/' . $delete->image_name;
        if($path) {
            unlink($path);
        }
        session()->push('m', 'danger');
        session()->push('m', 'Deleted Successfully');
        return redirect()->back();
    }

    public function deleteSubscriber(Request $request) {

        $delete = Subscriber::find($request->sub_id_d);
        $delete->delete();

        session()->push('m', 'danger');
        session()->push('m', 'Deleted Successfully');

        return redirect()->back();
    }


}

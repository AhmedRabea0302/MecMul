<?php

namespace App\Http\Controllers\Site;

use App\About;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\HomeAboutaDetail;
use App\HomeAbouta;
use App\AddService;
use App\AddServiceDetail;
use App\Faq;
use App\Service;
use App\ClientsSlider;
use App\Goal;
use App\SocialLink;
use App\Slider;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex() {
        $home_abouts = HomeAboutaDetail::first();
        $home_abouts_image = HomeAbouta::first();
        $services    = AddService::limit(6)->get();
        $services_image = AddServiceDetail::all();
        $faqs        = Faq::limit(3)->get();
        $mission     = Service::first();
        $our_clients = ClientsSlider::all();
        $social_link = SocialLink::first();
        $sliders     = Slider::all();

        $title = 'Home';
        return view('site.pages.home.index')->with('title', $title)->with('home_abouts', $home_abouts)
            ->with('services', $services)->with('faqs', $faqs)->with('mission', $mission)->with('our_clients', $our_clients)
            ->with('social_link', $social_link)->with('sliders', $sliders)->with('home_abouts_image', $home_abouts_image)
            ->with('services_image', $services_image);
    }

    public function subscribe(Request $request){
        $rules = [
            'email' => 'required|email|unique:subscribers'
        ];

        $validator = validator($request->all(), $rules);

        if($validator->fails()){
            return \Response::json(
                ['data' => $validator->errors()->all()]
            );
        }

        $add = new Subscriber();
        $add->email = $request->email;
        $add->save();
        return response()->json(['data'=> 'Message Send Successfully']);
    }
}

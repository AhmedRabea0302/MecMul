<?php

namespace App\Http\Controllers\Site;

use App\Addservice;
use App\Faq;
use App\Http\Controllers\Controller;
use App\SocialLink;
use App\About;
use App\ClientsSlider;
use App\HomeAbouta;
use Illuminate\Http\Request;

use App\Http\Requests;

class FaqController extends Controller
{
    public function returnFaq(){

        $services = Addservice::all();
        $faqs = Faq::all();
        $social_link = SocialLink::first();
        $abouts = About::first();
        $our_clients = ClientsSlider::all();
        $home_abouts_image = HomeAbouta::first();

        return view('site.pages.faq.index')->with('services', $services)->with('faqs', $faqs)->with('home_abouts_image', $home_abouts_image)
        ->with('social_link', $social_link)->with('abouts', $abouts)->with('our_clients', $our_clients);
    }
}

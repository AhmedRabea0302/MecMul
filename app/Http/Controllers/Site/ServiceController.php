<?php

namespace App\Http\Controllers\Site;

use App\Addservice;
use App\Http\Controllers\Controller;
use App\Service;
use App\SocialLink;
use App\About;
use App\ClientsSlider;
use App\HomeAbouta;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
    public function returnService(){

        $services = Addservice::all();
        $social_link = SocialLink::first();
        $abouts = About::first();
        $our_clients = ClientsSlider::all();
        $home_abouts_image = HomeAbouta::first();
        $abouta      = Service::first();

        return view('site.pages.service.index')->with('services', $services)
        ->with('social_link', $social_link)->with('abouts', $abouts)->with('our_clients', $our_clients)
        ->with('home_abouts_image', $home_abouts_image)->with('abouta', $abouta);
    }
}

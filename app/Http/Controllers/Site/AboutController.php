<?php

namespace App\Http\Controllers\Site;

use App\About;
use App\SocialLink;
use App\ClientsSlider;
use App\HomeAbouta;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;


class AboutController extends Controller
{
    public function returnAbout(){
        $social_link = SocialLink::first();
        $abouts = About::first();
        $our_clients = ClientsSlider::all();
        $abouta      = About::first();
        $home_abouts_image = HomeAbouta::first();

        return view('site.pages.about.index')->with('abouts', $abouts)->with('social_link', $social_link)
        ->with('our_clients' ,$our_clients)->with('abouta', $abouta)->with('home_abouts_image' ,$home_abouts_image);
    }

}

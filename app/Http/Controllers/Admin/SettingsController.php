<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
class SettingsController extends Controller
{
    public function getIndex() {
        $settings = Setting::first();
        $title = 'Settings';
        return view('admin.pages.settings.index')->with('title', $title)->with('settings', $settings);
    }

    public function updateSettings(Request $request) {
        $update = Setting::first();
        $update->site_name        = $request->input('site_name');
        $update->site_url         = $request->input('site_url');
        $update->site_name_search = $request->input('site_name_search');
        $update->site_mail        = $request->input('site_mail');
        $update->site_language    = $request->input('site_language');

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');

        $update->save();
        return redirect()->back();
    }


}

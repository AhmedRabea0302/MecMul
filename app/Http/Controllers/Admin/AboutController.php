<?php

namespace App\Http\Controllers\Admin;

use App\About;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Setting;
class AboutController extends Controller
{
    public function getIndex() {
        $result = About::first();
        $title  = 'About';
        return view('admin.pages.about.index')->with('title', $title)->with('result', $result);
    }

    public function updateAbout(Request $request){
        $update       = About::first();
        $file         = $request->file('image_path');
        $destination  = 'storage/uploads/images';
        if(!empty($file)) {
            $file_name  = $file->getClientOriginalName();
            $file->move($destination, $file_name);
            $update->image_path      = $file_name;
        }
        $update->update();

        $update->getDetails()->where('lang', 'en')->first()->update([
            'about_paragraph' => $request->input('first_paragraph_en'),
        ]);
        $update->getDetails()->where('lang', 'ar')->first()->update([
            'about_paragraph' => $request->input('first_paragraph_ar'),
        ]);

        $update->getDetails()->where('lang', 'en')->first()->update([
            'about_left' => $request->input('left_about_en'),
        ]);
        $update->getDetails()->where('lang', 'ar')->first()->update([
            'about_left' => $request->input('left_about_ar'),
        ]);

        $update->getDetails()->where('lang', 'en')->first()->update([
            'about_right' => $request->input('right_about_en'),
        ]);
        $update->getDetails()->where('lang', 'ar')->first()->update([
            'about_right' => $request->input('right_about_ar'),
        ]);

        $update->update();

        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');
        //session(['m'=>'success', 'x'=>'Updated Successfully']);
        return redirect()->back();
    }

}

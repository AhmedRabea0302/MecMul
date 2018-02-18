<?php

namespace App\Http\Controllers\Admin;

use App\Subscriber;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\AddServiceDetail;
use App\Service;
use App\AddService;

use Validator;

use App\Http\Controllers\Controller;

class YachtController extends Controller
{
    public function getIndex() {
        $result = Service::first();
        $all_services = AddService::all();
        $title  = 'Service';
        return view('admin.pages.service.index')->with('title', $title)->with('result', $result)
            ->with('all_services', $all_services);
    }

    public function updateMission(Request $request){
        $update = Service::first();

        $update->where('lang', 'en')->first()->update([
            'our_services' => $request->input('our_services_en'),
        ]);

        $update->where('lang', 'ar')->first()->update([
            'our_services' => $request->input('our_services_ar'),
        ]);

        $update->where('lang', 'en')->first()->update([
            'our_mission' => $request->input('our_mission_en'),
        ]);

        $update->where('lang', 'ar')->first()->update([
            'our_mission' => $request->input('our_mission_ar'),
        ]);

        $update->where('lang', 'en')->first()->update([
            'our_vision' => $request->input('our_vision_en'),
        ]);

        $update->where('lang', 'ar')->first()->update([
            'our_vision' => $request->input('our_vision_ar'),
        ]);

        $update->update();
        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');

        return redirect()->back();
    }

    public function addService(Request $request) {
        $add = new AddService();
        $add_details = new AddServiceDetail();
        $rules = [
            'upload_service_image' => 'required',
            'service_title_en'        => 'required',
            'service_title_ar'        => 'required',
            'service_description_en'  => 'required',
            'service_description_ar'  => 'required'
        ];

        $nicknames = [
            'upload_service_image' => 'image field',
            'service_title_en'        => 'service title in english',
            'service_title_ar'        => 'service title in arabic',
            'service_description_en'  => 'service description in english',
            'service_description_ar'  => 'service description in arabic'
        ];
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($nicknames);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }else {
            $file = $request->file('upload_service_image');
            $dest = 'storage/uploads/services/';

            if(!empty($file)){

                $file_name = $file->getClientOriginalName();
                $file->move($dest, $file_name);
                $add->image_name = $file_name;
            }
            $add->save();



            $add_details->insert([
                'service_title' => $request->input('service_title_en'),
                'service_description' => $request->input('service_description_en'),
                'lang'          => 'en',
                'about_id' => $add->id
            ]);

            $add_details->insert([
                'service_title' => $request->input('service_title_ar'),
                'service_description' => $request->input('service_description_ar'),
                'lang'          => 'ar',
                'about_id' => $add->id
            ]);

            session()->push('m', 'success');
            session()->push('m', 'Added Successfully');
            return redirect()->back();
        }

    }

    public function updateOneService(Request $request) {

        $update = AddService::find($request->id);
        $file   = $request->file('imageName');
        $destination = 'storage/uploads/services/';
        if(!empty($file)){
            $file_name = $file->getClientOriginalName();
            $file->move($destination, $file_name);
            $update->image_name = $file_name;
        }

        $update->getDetails()->where(['about_id' => $request->id, 'lang' => 'en'])->update([
            'service_title' => $request->input('service_title')
        ]);

        $update->getDetails()->where(['about_id' => $request->id, 'lang' => 'en'])->update([
            'service_description' => $request->input('service_description')
        ]);

        $update->save();
        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');
        return redirect()->back();
    }

    public function deleteOneService(Request $request) {
        $delete = AddService::find($request->id);
        $delete_details = AddServiceDetail::where('about_id', $request->id);
        $delete->delete();
        $delete_details->delete();
        $path = 'storage/uploads/services/' . $delete->image_name;
        if($path) {
            unlink($path);
        }
        session()->push('m', 'danger');
        session()->push('m', 'Deleted Successfully');
        return redirect()->back();
    }
}

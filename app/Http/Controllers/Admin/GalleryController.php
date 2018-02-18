<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Faker\Provider\File;
use Illuminate\Http\Request;
use App\Gallery;

use App\Http\Requests;
use Validator;

class GalleryController extends Controller
{

    public function getIndex(){
        $title = 'Gallery';
        $selectGallery = Gallery::all();
        return view('admin.pages.gallery.index')->with('title', $title)->with('selectGallery', $selectGallery);
    }

    public function addGallery(Request $request) {
        $add = new Gallery();
        $rules = [
            'gallery_image' => 'required'
        ];

        $nicknames = [
            'gallery_image' => 'Image Field'
        ];

        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($nicknames);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {
            $file = $request->file('gallery_image');

            if(!empty($file)) {
                $destination = 'storage/uploads/gallery';
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

    public function updateGallery(Request $request){
        $update = Gallery::find($request->id);

        $file= $request->image;
        if(!empty($file)){
            $destination = 'storage/uploads/gallery';
            $file_name   = $file->getClientOriginalName();
            $file->move($destination, $file_name);

            $update->image_name = $file_name;
        }

        $update->update();
        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');
        return redirect()->back();
    }

    public function galleryDelete(Request $request){
        $delete = Gallery::find($request->id);
        $delete->delete();
        $path = 'storage/uploads/gallery/' . $delete->image_name;
        if($path) {
            unlink($path);
        }
        session()->push('m', 'danger');
        session()->push('m', 'Deleted Successfully');
        return redirect()->back();
    }
}

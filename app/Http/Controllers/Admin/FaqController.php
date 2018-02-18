<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;

class FaqController extends Controller
{

    public function getIndex(){
        $title = 'Faq';
        $allQuestions = Faq::all();
        return view('admin.pages.faq.index')->with('title', $title)->with('allQuestions', $allQuestions);
    }

    public function addQuestion(Request $request){
        $add = new Faq();

        $rules = [
            'question_en' => 'required',
            'question_ar' => 'required',
            'answer_en' => 'required',
            'answer_ar' => 'required'
        ];

        $nicknames = [
            'question_en' => 'Question in English',
            'question_ar' => 'Question in Arabic',
            'answer_en' => 'Answer In English',
            'answer_ar' => 'Answer in Arabic'

        ];

        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($nicknames);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {

            $add->insert([
                'question' => $request->input('question_en'),
                'answer'   => $request->input('answer_en'),
                'lang'     => 'en',
                'other_id' => $add->id
            ]);

            $add->insert([
                'question' => $request->input('question_ar'),
                'answer'   => $request->input('answer_ar'),
                'lang'     => 'ar',
                'other_id' => $add->id
            ]);

            session()->push('m', 'success');
            session()->push('m', 'Added Successfully');

            return redirect()->back();
        }
    }

    public function updateQuestion(Request $request){
        $update = Faq::find($request->id);
        $update->question = $request->input('question_text');
        $update->answer   = $request->input('answer_text');

        $update->update();
        session()->push('m', 'success');
        session()->push('m', 'Updated Successfully');
        return redirect()->back();
    }

    public function deleteQuestion(Request $request){
        Faq::find($request->id)->delete();
        session()->push('m', 'danger');
        session()->push('m', 'Deleted Successfully');
        return redirect()->back();
    }

}

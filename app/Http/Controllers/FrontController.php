<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function Flasher\Prime\flash;

class FrontController extends Controller
{
    //
    function index(){
        return view('front.index');
    }

    function resume(){
        $experiences = Experience::all();
        $educations = Education::all();
        $skills=Skill::all();
        $languages=Language::all();
        return view('front.resume',compact('experiences','educations','skills','languages'));
    }

    function projects(){
        $projects=Project::all();
        return view('front.projects',compact('projects'));
    }

    function contact(){
        return view('front.contact');
    }
    function contact_mail(Request $request){
        // $request->
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ]);
        // Mail::to('admin@gmail.com')->send(new ContactUs($request->except('_token')));
        flash()->success('Your message has been sent successfully!');
        return redirect()->back();
    }
}
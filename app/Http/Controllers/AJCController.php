<?php

namespace App\Http\Controllers;

use App\Mail\InquireMail;
use App\Models\Application;
use App\Models\Applications;
use Illuminate\Http\Request;
use App\Mail\AutoReplyInquire;
use App\Models\Automation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AJCController extends Controller
{

    public function homepage()
    {
        return view('homepage');
    }
    public function applynow()
    {
        return view('applynow');
    }
    public function applynow_store (Request $request){
        $request->validate([
            'fullname' => 'required|unique:applications',
            'cpnumber' => 'required|max:11|min:11|unique:applications',
            'address' => 'required',
            'internet_plan' => 'required'
        ]);
       $application = Applications::create([
            'fullname' => $request->fullname,
            'cpnumber' => $request->cpnumber,
            'address' => $request->address,
            'internet_plan' => $request->internet_plan
        ]);
        if($application){
            return redirect()->back()->with('status', 'Application submitted, please wait for text or call.');
        }else{
            return redirect()->back()->with('error', 'Application failed, please try again.');
        }
    }

    public function internet()
    {
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }
        return view('include.internet');
    }
    public function promos()
    {
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }
        return view('include.promos');
    }
    public function contactus()
    {
        if(Auth::check()){
            if(Auth::user()->usertype=='admin'){
                return redirect(route('admindashboard'));
            }else{
                return redirect(route('dashboard'));
            }
        }
        return view('include.contactus');
    }

    public function sendemailinquire (Request $request) 
    {
        $request->validate([
            'inquire_client_name' => 'required',
            'inquire_client_email' => 'required',
            'inquire_client_message' => 'required'
        ]);
        $inquire_client_name = $request->inquire_client_name;
        $inquire_client_email = $request->inquire_client_email;
        $inquire_client_message = $request->inquire_client_message;
        Mail::to('ajcpisonet@gmail.com')->send (new InquireMail($inquire_client_name, $inquire_client_email, $inquire_client_message));
        Mail::to($inquire_client_email)->send (new AutoReplyInquire($inquire_client_name));
       
        return redirect()->back()->with('status', 'Thanks for reaching out.');
    }


    //Home automation

    public function automation ()
    {
        
        return view('include.homeautomation');
    }

   
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function addClient(){
        // to avoid unauthorized access
        if(Auth::user()->usertype!='admin'){
            return redirect(route('dashboard'));
        }
        return view('include.addClient');
    }

    // Add Client post request
    function addClientPost(Request $request){
        // to avoid unauthorized access
        if(Auth::user()->usertype!='admin'){
            return redirect(route('dashboard'));
        }
        $request->validate([
            'firstname' => 'required'
        ]);

        $data['firstname'] = $request->firstname;
       
        $applicants = Application::create($data);

        if(!$applicants){
            return redirect(route('applynow'))->with("error", "Application failed, please try again");
        }
        return redirect(route('applynow'))->with("success", "Application submitted, Please wait for email, text or call");
    }
}

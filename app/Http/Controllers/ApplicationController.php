<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\Models\User;
use App\Models\Allclient;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    function applynowPOST(Request $request){
        $request->validateWithBag('apply', [
            'firstname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'birthday' => ['required'],
            'gender' => ['required'],
            'plan' => ['required'],
            'email' => ['required','email','unique:applications,email'],
            'street' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:255'],
            'town' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'landmark' => ['required', 'string', 'max:255'],
            'uploadid' => ['required'],
            'idselfie' => ['required']
        ]);

        $data['firstname'] = $request->firstname;
        $data['middlename'] = $request->middlename;
        $data['lastname'] = $request->lastname;
        $data['contact'] = $request->contact;
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['plan'] = $request->plan;
        $data['email'] = $request->email;
        $data['street'] = $request->street;
        $data['barangay'] = $request->barangay;
        $data['town'] = $request->town;
        $data['province'] = $request->province;
        $data['landmark'] = $request->landmark;
        $data['uploadid'] = $request->uploadid;
        $data['idselfie'] = $request->idselfie;


        $applicants = Application::create($data);
        if(!$applicants){
            return redirect(route('applynow'))->with("error", "Application failed, please try again");
        }
        return redirect(route('applynow'))->with("success", "Application submitted, Please wait for email, text or call");
    }


    public function linkaccount(Request $request){
        $request->validate([
            'accountNumber' => 'required'
        ]);

        $searchAccountNumber = Allclient::get();
        foreach($searchAccountNumber as $searchAccountNumber){

            $recvAccountNumber = (integer)$request->accountNumber; // converting user input into integer
            
            $AccountNumber = $searchAccountNumber->accountNumber; // data from allclient table specific accountNumber Column
            if($recvAccountNumber == $AccountNumber){
                //proceed
                $linkDataAccountNumber = new User;
                $linkDataAccountNumber->accountNumber = $recvAccountNumber;
                $linkDataAccountNumber->save();
                echo 'saved';
            }else{
                echo 'not ok';
            }

        }


        

    }

}


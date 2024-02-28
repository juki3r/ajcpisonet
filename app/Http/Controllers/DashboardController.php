<?php

namespace App\Http\Controllers;

use App\Models\Allclient;
use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->usertype != 'user') {
            return redirect(route('admindashboard'));
        }

            return view('dashboard');
    }

    public function linkaccount (Request $request) {
        $request->validate([
            'accountnumber'=> 'required'
        ]);
        $searchAccountNumber = Allclient::get();
        foreach($searchAccountNumber as $searchAccountNumber){
            $recvAccountNumber = $request->accountnumber; // user input
            $AccountNumber = $searchAccountNumber->accountNumber; // data from allclient table specific accountNumber Column
            if($recvAccountNumber == $AccountNumber){
                //proceed
                echo 'ok';
            }else{
                echo 'not ok';

        }

    }


}





    // public function userdashboard($id)
    // { {
    //         if (Auth::user()->usertype != 'user') {
    //             return redirect(route('admindashboard'));
    //         } else if (Auth::id()) {
    //             $usertype = Auth()->user()->usertype;
    //             if ($usertype == 'user') {

    //                 $application = User::find($id);


    //                 return view('userdashboard')->with('application', $application);
    //             }
    //         }
    //     }
    // }

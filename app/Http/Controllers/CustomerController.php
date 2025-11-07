<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required|string',
            'fullname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
        ]);

        Customer::create($request->all());

        return response()->json(['message' => 'Application submitted successfully!']);
    }
}

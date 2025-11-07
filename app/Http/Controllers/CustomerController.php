<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Validation\ValidationException;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'plan' => 'required|string',
                'fullname' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'contact_number' => 'required|string|max:11|unique:customers,contact_number',
            ]);

            Customer::create($validated);

            return response()->json(['message' => 'Application submitted successfully!']);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        }
    }
}

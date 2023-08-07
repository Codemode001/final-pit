<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data if needed
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            // Add more validation rules as needed
        ]);

        // Create a new instance of the User model and fill it with the form data
        $user = new User([
            'firstName' => $validatedData['firstName'],
            'lastName' => $validatedData['lastName'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Hash the password before saving
        ]);

        // Save the user data to the database
        $user->save();

        // Redirect to the success page or do any other necessary actions
        return redirect()->route('success'); 
    }
}
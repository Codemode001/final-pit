<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Handle the form submission logic here
        // Example: Save data to the database, send emails, etc.

        return redirect()->route('home'); // Redirect to a success page
    }
}
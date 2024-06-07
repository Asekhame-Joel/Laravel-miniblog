<?php

namespace App\Http\Controllers;
use App\Services\Newsletters;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function __invoke(Newsletters $newsletter){

        request()->validate([
            'email' => 'required|email'
        ]);

        try {
            // $newsletter = new Newsletters;
            $newsletter->subcribe(request('email'));
    
        } catch (\Exception $e) {
            // Check if the exception is related to an email that already exists
            if (strpos($e->getMessage(), 'is already a list member') !== false) {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'email' => 'This email is already Subscribed!'
                ]);
            } else {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'email' => 'This email could not be added to our newsletter'
                ]);
            }
        }
    
        // Redirect with a success message
        return redirect('/')->with('success', 'You have subscribed successfully to our newsletter');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class SuccessController extends Controller
{
    public function loadSuccess(Request $request)
    {
        $to = ['eranner@gmail.com', 'link15645@yahoo.com'];

        foreach ($to as $email) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Handle invalid email address
                return redirect()->back()->with('error', 'Invalid email address: ' . $email);
            }
        }

        $clientName = $request->input('first_and_last');
        $clientEmail = $request->input('contactEmail');
        $clientPhone = $request->input('phone_number');
        $inquiry = $request->input('inquiry');

        // Send email using Laravel's Mail facade and ContactFormMail Mailable class
        Mail::to($to)->send(new ContactFormMail($clientName, $clientEmail, $clientPhone, $inquiry));

        return view('success');
    }
}

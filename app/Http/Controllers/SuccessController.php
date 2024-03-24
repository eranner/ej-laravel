<?php

// SuccessController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class SuccessController extends Controller
{
    public function loadSuccess(Request $request)
    {
        if(!empty($request->input('address'))){
            redirect()->route('contact');
            exit;
        }
        $to = ['eranner@gmail.com', 'link15645@yahoo.com'];

        foreach ($to as $email) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Handle invalid email address
                return redirect()->back()->with('error', 'Invalid email address: ' . $email);
            }
        }

        $data = [
            'clientName' => $request->input('first_and_last'),
            'clientEmail' => $request->input('contactEmail'),
            'clientPhone' => $request->input('phone_number'),
            'inquiry' => $request->input('inquiry'),
        ];

        try {
            // Send email using Laravel's Mail facade and ContactFormMail Mailable class
            Mail::to($to)->send(new ContactFormMail($data));
            return view('success');

        } catch (\Exception $e) {
            // Handle email sending failure
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }

    }
}
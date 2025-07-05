<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Send email
        try {
            Mail::send('emails.feedback', [
                'customerName' => $request->name,
                'customerEmail' => $request->email,
                'feedbackMessage' => $request->feedback,
            ], function ($message) use ($request) {
                $message->to('kaungsanthwin388@gmail.com')
                        ->subject('New Customer Feedback - Seinn Yaung So')
                        ->replyTo($request->email, $request->name);
            });

            return back()->with('success', 'Thank you for your feedback! We will get back to you soon.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your feedback. Please try again later.');
        }
    }
}

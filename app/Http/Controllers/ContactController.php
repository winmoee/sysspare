<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:255',
            'feedback_type' => 'required|string|in:General,Sales,Service,Spare Parts',
        ]);

        // Here you can add your logic to handle the form submission
        // For example, you could:
        // 1. Save to database
        // 2. Send email notification
        // 3. Create a ticket in your system

        return redirect()->back()->with('success', 'Thank you for your message. We will contact you soon!');
    }
}

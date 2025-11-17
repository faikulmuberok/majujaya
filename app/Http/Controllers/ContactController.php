<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // In a real application, you would send an email here
        // For now, we'll just log the contact form submission
        \Log::info('New contact form submission', $request->all());

        return redirect()->route('contact')
            ->with('success', 'Terima kasih telah menghubungi kami. Kami akan segera merespons pesan Anda.');
    }
}
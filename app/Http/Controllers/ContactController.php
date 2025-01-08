<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        // Envoyer un email
        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to('mldiop08@gmail.com')
                ->subject($validated['subject'])
                ->from($validated['email'], $validated['name']);
        });

        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès.');
    }

    //Admin Panel List
    public function index(){
        return view('admin.contacts.index', ['contacts' => Contact::orderBy('created_at', 'asc')->paginate(25)]);
    }
}

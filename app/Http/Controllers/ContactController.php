<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'titre' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Message envoyé avec succès.');
    }

    public function index(Request $request)
    {
        $query = Contact::query();

    if ($request->filled('lu')) {
        $query->where('lu', (bool) $request->lu);
    }

    $messages = $query->latest()->get();

    return view('admin.contacts.index', compact('messages'));
    }

    public function toggleLu(Contact $contact)
    {
        $contact->update(['lu' => !$contact->lu]);
        return back();
    }

    public function message($id)
    {
        $message=\App\Models\Contact::where('id',$id)->first();
        return view('admin.contacts.message', compact('message'));
    }
}

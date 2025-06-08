<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create([
            'email' => $request->email,
        ]);

        Mail::to($request->email)->send(new NewsletterMail(
            title: 'Confirmation d’abonnement',
            body: 'Merci pour votre abonnement à notre newsletter. Vous recevrez bientôt nos actualités.'
        ));

        return back()->with('success', 'Merci pour votre abonnement à la newsletter !');
    }
}

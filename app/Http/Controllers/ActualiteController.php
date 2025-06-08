<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Newsletter;
use App\Mail\ActualiteNewsletterMail;
use Illuminate\Support\Facades\Mail;
class ActualiteController extends Controller
{
    public function index2()
    {
        $news = Actualite::get(); // Récupère les 3 dernières actualités
        $actualites = Actualite::latest()->paginate(6); // Ou ->get() si tu ne veux pas de pagination
        return view('actualites', compact('actualites','news'));
    }
    public function index(Request $request)
    {
        $query = Actualite::query();

        // Recherche par mot-clé dans le titre
        if ($request->filled('q')) {
            $query->where('titre', 'like', '%' . $request->q . '%');
        }

        // Récupération des actualités
        $actualites = $query->latest()->get();

        return view('admin.actualites.index', compact('actualites'));
    }

    public function create()
    {
        return view('admin.actualites.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'categorie' => 'nullable|string|max:255',
            'lien_linkedin' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('actualites', 'public');
        }

        $actualite=Actualite::create($validated);

  $subscribers = Newsletter::pluck('email'); // => collection d'emails
        foreach ($subscribers as $email) {
            Mail::to($email)->send(new ActualiteNewsletterMail($actualite));
        }
        return redirect()->route('admin.actualites.index')->with('success', 'Actualité ajoutée avec succès!');
    }


    public function edit(Actualite $actualite)
    {
        return view('admin.actualites.edit', compact('actualite'));
    }

    public function update(Request $request, Actualite $actualite)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'categorie' => 'nullable|string|max:255',
            'lien_linkedin' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($actualite->image && Storage::disk('public')->exists($actualite->image)) {
                Storage::disk('public')->delete($actualite->image);
            }

            $validated['image'] = $request->file('image')->store('actualites', 'public');
        }

        $actualite->update($validated);

        return redirect()->route('admin.actualites.index')->with('success', 'Actualité mise à jour avec succès!');
    }


    public function destroy(Actualite $actualite)
    {
        if ($actualite->image && Storage::disk('public')->exists($actualite->image)) {
            Storage::disk('public')->delete($actualite->image);
        }

        $actualite->delete();

        return redirect()->route('admin.actualites.index')->with('success', 'Actualité supprimée avec succès!');
    }

    public function actualite($id)
    {
        $actualite=\App\Models\Actualite::where('id',$id)->first();
        return view('actualite', compact('actualite'));
    }
}

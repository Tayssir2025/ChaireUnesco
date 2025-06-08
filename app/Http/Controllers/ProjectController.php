<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProjectController extends Controller
{
    public function index(Request $request)
{
    $query = Project::with('user');

    // Si l'utilisateur est enseignant, ne montrer que ses projets
    if (auth()->user()->role === 'enseignant') {
        $query->where('user_id', auth()->id());
    }

    // Recherche prioritaire si 'q' est rempli, sinon filtre par statut
    if ($request->filled('q')) {
        $search = $request->q;
        $query->whereHas('user', function ($q) use ($search) {
            $q->where('nom', 'like', '%' . $search . '%');
        });
    } elseif ($request->filled('statut')) {
        $query->where('statut', $request->statut);
    }

    $projects = $query->latest()->paginate(9);

    return view('projets.index', compact('projects'));
}




    public function create()
    {
        return view('projets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'datedebut' => 'required|date',
            'datefin' => 'required|date|after:datedebut',
            'description' => 'required|string',
        ]);

        Project::create([
            'titre' => $request->titre,
            'datedebut' => $request->datedebut,
            'datefin' => $request->datefin,
            'description' => $request->description,
            'statut' => 'en attente',
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('projets.index')->with('success', 'Projet créé avec succès!');
    }

    public function edit(Project $project)
    {
        return view('projets.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
{
    $rules = [
        'titre' => 'required|string|max:255',
        'datedebut' => 'required|date',
        'datefin' => 'required|date|after:datedebut',
        'description' => 'required|string',
    ];

    // Only validate statut if admin
    if (auth()->user()->is_admin) {
        $rules['statut'] = 'required|in:en attente,approuve,annule';
    }

    $validated = $request->validate($rules);

    // Only include statut if admin
    if (auth()->user()->is_admin) {
        $project->update($validated);
    } else {
        // Remove statut if it's not meant to be updated
        unset($validated['statut']);
        $project->update($validated);
    }

    return redirect()->route('projets.index')->with('success', 'Projet mis à jour avec succès!');
}


    public function updateStatus(Request $request, Project $project)
    {
        $request->validate([
            'statut' => 'required|in:en attente,approuve,annule',
        ]);

        $project->update(['statut' => $request->statut]);

        return back()->with('success', 'Statut mis à jour avec succès!');
    }
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès!');
    }
}

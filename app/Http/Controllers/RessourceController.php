<?php

namespace App\Http\Controllers;

use App\Models\Ressource;
use Illuminate\Http\Request;

class RessourceController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index2()
    {
        $ressource = Ressource::get();
        $ressources = Ressource::latest()->paginate(10);
        return view('ressources', compact('ressources', 'ressource'));
    }
    public function index(Request $request)
    {
        $query = Ressource::query();

        if ($request->filled('q')) {
            $query->where('titre', 'like', '%' . $request->q . '%');
        } 

        $ressources = $query->latest()->paginate(10);

        return view('admin.ressources.index', compact('ressources'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ressources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'type' => 'nullable', 
        ]);

        if ($request->hasFile('type')) {
            $validated['type'] = $request->file('type')->store('ressources', 'public');
        }

        Ressource::create($validated);

        return redirect()->route('admin.ressources.index')->with('success', 'Ressource ajoutée avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ressource $ressource)
    {
        return view('admin.ressources.edit', compact('ressource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ressource $ressource)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'type' => 'nullable',
        ]);

        if ($request->hasFile('type')) {

            if ($ressource->type && Storage::disk('public')->exists($ressource->type)) {
                Storage::disk('public')->delete($ressource->type);
            }

            $validated['type'] = $request->file('type')->store('ressources', 'public');
        }

        $ressource->update($validated);

        return redirect()->route('admin.ressources.index')->with('success', 'Ressource mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ressource $ressource)
    {
        $ressource->delete();

        return redirect()->route('admin.ressources.index')->with('success', 'Ressource supprimée.');
    }
}

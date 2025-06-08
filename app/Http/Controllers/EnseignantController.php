<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', 'enseignant');

        if ($request->filled('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('nom', 'like', '%' . $request->q . '%')
                    ->orWhere('prenom', 'like', '%' . $request->q . '%')
                    ->orWhere('email', 'like', '%' . $request->q . '%')
                    ->orWhere('phone', 'like', '%' . $request->q . '%');
            });
        }

        $enseignants = $query->get();

        return view('admin.enseignants.index', compact('enseignants'));
    }
    public function destroy($id)
    {
        $enseignant = User::where('role', 'enseignant')->findOrFail($id);
        $enseignant->delete();

        return redirect()->route('admin.enseignants.index')->with('success', 'Enseignant supprimé avec succès.');
    }

}

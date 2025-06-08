<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Ressource;
use App\Models\Contact;
use App\Models\Actualite;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {

            return view('admin.dashboard', [
                'totalProjects' => Project::count(),
                'totalEnseignants' => User::where('role', 'enseignant')->count(),
                'totalRessources' => Ressource::count(),
                'totalActualites' => Actualite::count(),
                'totalMessages' => Contact::count(),
                'approvedProjects' => Project::where('statut', 'approuve')->get(),
                'pendingProjects' => Project::where('statut', 'en attente')->take(5)->get(),
                'unreadMessages' => Contact::where('lu', false)->get(),
                'unreadMessagesCount' => Contact::where('lu', false)->count(),
                'pendingProjectsCount' => Project::where('statut', 'en attente')->count(),
            ]);
        } elseif ($user->role === 'enseignant') {
            return view('enseignant.dashboard');
        } else {
            abort(403, 'Unauthorized');
        }
    }
}

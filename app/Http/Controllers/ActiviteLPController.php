<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiviteLPController extends Controller
{
    public function index()
    {
        return view('activites');
    }

    public function activitesetudiants()
    {
        return view('activitesetudiants');
    }

    public function activitesrecherches()
    {
        return view('activitesrecherches');
    }

    public function activitesmondesocieconomique()
    {
        return view('activitesmondesocieconomique');
    }

    public function activitesresponsablesunis()
    {
        return view('activitesresponsablesunis');
    }

    public function activitespolitiquespubliques()
    {
        return view('activitespolitiquespubliques');
    }
}

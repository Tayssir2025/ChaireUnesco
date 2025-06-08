<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Actualite;
use App\Http\Controllers\ActiviteLPController;
use App\Http\Controllers\NewsletterController;

use App\Http\Controllers\AboutLPController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/register', [RegisteredUserController::class, 'createFromAdmin'])->name('admin.register.form');
    Route::post('/admin/register', [RegisteredUserController::class, 'storeFromAdmin'])->name('admin.register.store');
});


Route::get('/', function () {
    $news = Actualite::latest()->take(3)->get();
    return view('welcome', compact('news'));
});
Route::get('/authentification', function () {
    return view('authentification');
})->name('authentification');

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\EnseignantController;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/enseignants', [EnseignantController::class, 'index'])->name('admin.enseignants.index');
    Route::delete('admin/enseignants/{id}', [EnseignantController::class, 'destroy'])->name('admin.enseignants.destroy');

});



use App\Http\Controllers\RessourceController;
Route::get('/ressources', [RessourceController::class, 'index2'])->name('ressources');

Route::prefix('admin')->as('admin.')->middleware(['auth'])->group(function () {
    Route::resource('ressources', RessourceController::class);
});

use App\Http\Controllers\ActualiteController;

Route::get('/actualites', [ActualiteController::class, 'index2'])->name('actualites');
Route::get('/actualite/{id}', [ActualiteController::class, 'actualite'])->name('actualite');

Route::get('/activites', [ActiviteLPController::class, 'index'])->name('activites');
Route::get('/activitesetudiants', [ActiviteLPController::class, 'activitesetudiants'])->name('activitesetudiants');
Route::get('/activitesrecherches', [ActiviteLPController::class, 'activitesrecherches'])->name('activitesrecherches');
Route::get('/activitesmondesocieconomique', [ActiviteLPController::class, 'activitesmondesocieconomique'])->name('activitesmondesocieconomique');
Route::get('/activitesresponsablesunis', [ActiviteLPController::class, 'activitesresponsablesunis'])->name('activitesresponsablesunis');
Route::get('/activitespolitiquespubliques', [ActiviteLPController::class, 'activitespolitiquespubliques'])->name('activitespolitiquespubliques');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/actualites', [ActualiteController::class, 'index'])->name('admin.actualites.index');
    Route::get('/admin/actualites/create', [ActualiteController::class, 'create'])->name('admin.actualites.create');
    Route::post('/admin/actualites', [ActualiteController::class, 'store'])->name('admin.actualites.store');
    Route::get('/admin/actualites/{actualite}/edit', [ActualiteController::class, 'edit'])->name('admin.actualites.edit');
    Route::put('/admin/actualites/{actualite}', [ActualiteController::class, 'update'])->name('admin.actualites.update');
    Route::delete('/admin/actualites/{actualite}', [ActualiteController::class, 'destroy'])->name('admin.actualites.destroy');

    Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/admin/message/{id}', [ContactController::class, 'message'])->name('message');
    Route::patch('/admin/messages/{contact}/toggle', [ContactController::class, 'toggleLu'])->name('admin.contacts.toggle');


    Route::prefix('projets')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('projets.index');
        Route::get('/create', [ProjectController::class, 'create'])->name('projets.create');
        Route::post('/', [ProjectController::class, 'store'])->name('projets.store');
        Route::get('/{project}/edit', [ProjectController::class, 'edit'])->name('projets.edit');
        Route::put('/{project}', [ProjectController::class, 'update'])->name('projets.update');
        Route::delete('/{project}', [ProjectController::class, 'destroy'])->name('projets.destroy');
        Route::patch('/{project}/status', [ProjectController::class, 'updateStatus'])->name('projets.updateStatus');
    });
});

Route::get('/about', [AboutLPController::class, 'index'])->name('about');


// Landing page
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');




require __DIR__ . '/auth.php';

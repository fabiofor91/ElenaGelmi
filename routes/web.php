<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, "welcome"])->name('welcome');

// rotta per set lingue 
Route::post('/{lang}', [PublicController::class, "setLanguage"])->name('setLanguage');

// rotta Bio 
Route::get('/bio', [PublicController::class, 'bio'])->name('bio');

// rotta media 
Route::get('/medias', [PublicController::class, 'medias'])->name('medias');

// rotta progetti 
Route::get('/projects', [PublicController::class, 'projects'])->name('projects');

// rotta insegnamento 
Route::get('/teaching', [PublicController::class, 'teaching'])->name('teaching');

// rotta contatti 
Route::get('/contacts', [PublicController::class, 'contacts'])->name('contacts');

// rotta mail
Route::post('/contact/submit', [MailController::class, 'contactMail'])->name('contact_mail');
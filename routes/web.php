<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Login;
use App\Livewire\Users\Show;
use App\Livewire\Users\Index;
use App\Livewire\Timeline;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/timeline', Timeline::class)->name('timeline');

    Route::get('/users', Index::class)->name('users.index');
    Route::get('/users/{user}', Show::class)->name('users.show');
});

Route::get('/login', Login::class)->name('login')->middleware('guest');

Route::post('/logout', LogoutController::class)->name('logout');

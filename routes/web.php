<?php

use App\Http\Livewire\Categories;
use App\Http\Livewire\Sbmembers;
use App\Http\Livewire\Classifications;
use App\Http\Livewire\Employees;
use App\Http\Livewire\Incomingdocuments;
use App\Http\Livewire\Legislationinfo;
use App\Http\Livewire\Orderbusinesses;
use App\Http\Livewire\Ordinances;
use App\Http\Livewire\Referralinfo;
use App\Http\Livewire\Referrals;
use App\Http\Livewire\Resolutions;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('incomingdocuments',Incomingdocuments::class)->name('incomingdocuments');
    Route::get('categories',Categories::class)->name('categories');
    Route::get('employees',Employees::class)->name('employees');
    Route::get('incomingdocuments',Incomingdocuments::class)->name('incomingdocuments');
    Route::get('tags/{classification_id}',Classifications::class)->name('tags');
    Route::get('referrals',Referrals::class)->name('referrals');
    Route::get('referral/{referral_id}',Referralinfo::class)->name('referral');
    Route::get('legislation/{legislation_id}',Legislationinfo::class)->name('legislation');
    Route::get('classifications',Classifications::class)->name('classifications');
    Route::get('ordinances',Ordinances::class)->name('ordinances');
    Route::get('resolutions',Resolutions::class)->name('resolutions');
    Route::get('orderbusiness',Orderbusinesses::class)->name('orderbusiness');
    Route::get('sbmembers',Sbmembers::class)->name('sbmembers');
    
    Route::get('orderbusiness/view/{id}', 'App\Http\Controllers\ViewOrderBusinessController@view')->name('orderbusiness.view');
});

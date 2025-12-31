<?php

use App\Livewire\Blogs;

use App\Livewire\BlogView;
use App\Livewire\Client\About;
use App\Livewire\Client\Home;
use App\Livewire\Client\Services;
use App\Livewire\Contact;
use App\Livewire\HomePage;
use App\Livewire\Review;
use App\Livewire\Service;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;


Route::get('/', HomePage::class)->name('client.home');
Route::get('/blogs', Blogs::class)->name('client.blogs');
Route::get('/blogs/{blog}', BlogView::class)->name('client.blog.show');
Route::get('/services', Service::class)->name('client.services');
Route::get('/contact', Contact::class)->name('client.contact');
Route::get('/review', Review::class)->name('client.reviews');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

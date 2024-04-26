<?php

use App\Livewire\ListTodos;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('todos' , ListTodos::class)->middleware('auth')->name('todos.index');

require __DIR__ . '/auth.php';

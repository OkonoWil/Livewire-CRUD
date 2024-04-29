<?php

use App\Livewire\Edit;
use App\Livewire\ListTodos;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('todos', ListTodos::class)->middleware('auth')->name('todos.index');
Route::get('todos/{todo}/edit', Edit::class)->middleware('auth')->name('todos.edit');

require __DIR__ . '/auth.php';

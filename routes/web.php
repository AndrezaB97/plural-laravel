<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    UserForm,
    UserUpdate
};

Route::get('user/', UserForm::class);
Route::get('user/{id}', UserUpdate::class)->middleware('user_exists');
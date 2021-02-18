<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    UserForm
};

Route::get('user/', UserForm::class);
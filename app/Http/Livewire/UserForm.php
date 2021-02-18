<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserForm extends Component
{
    public $name;
    public $surname;
    public $email;
    public $password;
    public $cpf;
    public $phone;
    public $zip_code;
    public $road;
    public $district;
    public $city;
    public $state;
    public $number;
    public $terms;
    public $confirmation_password;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|max:150',
            'surname' => 'required|max:150',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'cpf' => 'required',
            'phone' => 'required',
            'zip_code' => 'required',
            'road' => 'required|max:150',
            'district' => 'required|max:100',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'number' => 'required|max:50',
            'terms' => 'required|boolean',
        ]);
    }

    public function userFormSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|max:150',
            'surname' => 'required|max:150',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'cpf' => 'required',
            'phone' => 'required',
            'zip_code' => 'required',
            'road' => 'required|max:150',
            'district' => 'required|max:100',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'number' => 'required|max:50',
            'terms' => 'required|boolean',
        ]);

        User::create($validatedData);
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}

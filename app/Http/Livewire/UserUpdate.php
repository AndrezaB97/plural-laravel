<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use \Illuminate\Session\SessionManager;

class UserUpdate extends Component
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

    public function mount($id)
    {
        \Request::session()->put('id', $id);
        $user = User::find($id);
        $this->fill($user);
        $this->password = $user->password;
        $this->confirmation_password = $user->password;
    }

    public function render()
    {
        return view('livewire.user-update');
    }

    public function userFormSubmit()
    {
        $id = \Request::session()->get('id');
        $validatedData = $this->validate([
            'name' => 'max:150',
            'surname' => 'max:150',
            'email' => 'email',
            'password' => '',
            'cpf' => '',
            'phone' => '',
            'zip_code' => '',
            'road' => 'max:150',
            'district' => 'max:100',
            'city' => 'max:100',
            'state' => 'max:100',
            'number' => 'max:50',
            'terms' => 'boolean',
        ]);

        $user = User::find($id);
        $user->fill($validatedData);
        $user->save();
        session()->flash('message', 'Usuário atualizado com sucesso.');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'max:150',
            'surname' => 'max:150',
            'email' => 'email',
            'password' => '',
            'cpf' => '',
            'phone' => '',
            'zip_code' => '',
            'road' => 'max:150',
            'district' => 'max:100',
            'city' => 'max:100',
            'state' => 'max:100',
            'number' => 'max:50',
            'terms' => 'boolean',
        ]);
    }
}

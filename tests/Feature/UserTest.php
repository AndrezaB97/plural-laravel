<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Livewire\UserForm;
use App\Http\Livewire\UserUpdate;
use App\Models\User;
use Livewire;

class UserTest extends TestCase
{
    /** @test */
    public function main_page_contains_user_form_livewire_component()
    {
        $this->get('user/')
        ->assertSeeLivewire('user-form');
    }

    /** @test */
    public function main_page_contains_user_form_update_livewire_component()
    {
        $id = User::factory()->create()['id'];
        $this->get('user/' . $id)
        ->assertSeeLivewire('user-update');
    }

    /** @test */
    public function user_form_sends()
    {
        Livewire::test(UserForm::class)->set('name', 'Teste')
        ->set('zip_code', '22222-222')
        ->set('cpf', '333.333.444-09')
        ->set('road', 'Rua Teste')
        ->set('district', 'Teste')
        ->set('state', 'Teste')
        ->set('city', 'Teste')
        ->call('userFormSubmit');
    }
}
<?php

namespace App\Providers;

use App\View\Components\InputText;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Blade::component('input-text', InputText::class);
        Blade::component('x-input-group', InputGroup::class);
        Blade::component('x-input-checkbox', InputCheckbox::class);
    }
}

<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\HasApiTokens;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
       
    ];

 
    public function boot(): void
    {
        // need to call passport routes inside the boot methods
        $this->registerPolicies();
        Passport::routes();
    
    }
}

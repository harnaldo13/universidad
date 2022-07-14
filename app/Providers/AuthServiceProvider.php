<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        "App/Models/Clase" => "App/Policies/ClasePolicy",
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('create-persona', function($user){
            $roles = User::all();
            foreach($roles as $rol){
                if($rol->id==auth()->id()){
                    if($rol->rol==1){
                        return true;
                    }else
                        return false;
                }
            }
        });
        //
    }
}

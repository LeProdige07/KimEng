<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('access', function (User $user, $request, $model) {
            $operationList = ["POST" => 'create', "GET" => 'read', "PUT" => 'update', "DELETE" => 'delete', "PATCH" => 'update'];
            $operator =  $request->method();
            $operation = $operationList[$operator];
            return $user->isAuthorized($model, $operation);
        });
    }
}

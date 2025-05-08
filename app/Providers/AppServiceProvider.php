<?php

namespace App\Providers;

use App\Models\RolePermission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('isAdmin', function ($user) {
            return $user->role_id == 1;
        });

        Gate::define('mengontrolPengguna', function ($user) {
            $roleAllowed =  RolePermission::where('permission_id', 1)->pluck('role_id')->toArray();
            $allowed = in_array($user->role_id, $roleAllowed);
            return $allowed;
        });
        Gate::define('deliveryOrder', function ($user) {
            $roleAllowed =  RolePermission::where('permission_id', 2)->pluck('role_id')->toArray();
            $allowed = in_array($user->role_id, $roleAllowed);
            return $allowed;
        });
        Gate::define('warehouse', function ($user) {
            $roleAllowed =  RolePermission::where('permission_id', 3)->pluck('role_id')->toArray();
            $allowed = in_array($user->role_id, $roleAllowed);
            return $allowed;
        });
        Gate::define('transport', function ($user) {
            $roleAllowed =  RolePermission::where('permission_id', 4)->pluck('role_id')->toArray();
            $allowed = in_array($user->role_id, $roleAllowed);
            return $allowed;
        });
    }
}

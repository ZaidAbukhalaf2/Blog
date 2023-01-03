<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\\Models\Categories'=>'App\Policies\CategoryPolicy',
        'App\\Models\Items'=>'App\Policies\ItemsPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-category','App\\Models\Categories@update')
        // Gate::resource('categories','App\\Models\Categories')
        // Gate::define('update-category', function (User $user,Categories $categories) {

        //     return $user->id == $categories->user_id;
        // });

        // Gate::define('delete-category', function ($user, $cat) {

        // });
    }
}

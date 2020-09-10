<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Session;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Inertia::version(function () {
            return md5_file(public_path('mix-manifest.json'));
        });

        Inertia::share([
            'session' => function () {
                return Session::get('inertia');
            },

            'errors' => function () {
                return Session::get('errors')
                    ? Session::get('errors')->getBag('default')->getMessages()
                    : (object)[];
            },
        ]);
    }
}

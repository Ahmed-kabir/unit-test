<?php

namespace App\Providers;

use App\Events\UserCreated;
use App\Listeners\SendUserConfirmation;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
            UserCreated::class => [
            SendUserConfirmation::class,
        ],
    ];


}

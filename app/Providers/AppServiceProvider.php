<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Livewire::component('clients.create.steps.personal-step', \App\Http\Livewire\Clients\Create\Steps\PersonalStep::class);
        Livewire::component('clients.create.steps.motor-step', \App\Http\Livewire\Clients\Create\Steps\MotorStep::class);
        Livewire::component('clients.create.steps.payment-step', \App\Http\Livewire\Clients\Create\Steps\PaymentStep::class);
        Livewire::component('clients.create.steps.referee-step', \App\Http\Livewire\Clients\Create\Steps\RefereeStep::class);
        Livewire::component('clients.create.steps.final-step', \App\Http\Livewire\Clients\Create\Steps\FinalStep::class);
    }
}

<?php

namespace App\Http\Livewire\Clients\Create;

use App\Http\Livewire\Clients\Create\Steps\MotorStep;
use App\Http\Livewire\Clients\Create\Steps\PaymentStep;
use Spatie\LivewireWizard\Components\WizardComponent;
use App\Http\Livewire\Clients\Create\Steps\PersonalStep;
use App\Http\Livewire\Clients\Create\Steps\RefereeStep;

class CreateClient extends WizardComponent
{
    public function steps(): array
    {
        return [
            PersonalStep::class,
            MotorStep::class,
            PaymentStep::class,
            RefereeStep::class
        ];
    }
}

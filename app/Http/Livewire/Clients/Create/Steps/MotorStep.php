<?php

namespace App\Http\Livewire\Clients\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class MotorStep extends StepComponent
{

    public $type;
    public $make;
    public $registration;
    public $color;
    public $chasis;
    public $engine;
    public $condition;
    public $registered_names;

    protected $rules = [
        'type' => 'required',
        'make' => 'required',
        'registration' => 'required',
        'color' => 'required',
        'chasis' => 'required',
        'engine' => 'required',
        'condition' => 'required',
        'registered_names' => 'required'
    ];

    public function submit(){
        $this->validate();
        sleep(3);
        $this->nextStep();
    }
    public function render()
    {
        return view('livewire.clients.create.steps.motor-step');
    }
}

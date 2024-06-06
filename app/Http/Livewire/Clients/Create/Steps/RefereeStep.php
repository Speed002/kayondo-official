<?php

namespace App\Http\Livewire\Clients\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class RefereeStep extends StepComponent
{
    public $referee1_name;
    public $referee1_relationship;
    public $referee1_contact;
    public $referee2_name;
    public $referee2_relationship;
    public $referee2_contact;
    public $st_chair_name;
    public $st_chair_contact;
    public $lc_chair_name;
    public $lc_chair_contact;

    protected $rules = [
        'referee1_name' => 'required',
        'referee1_relationship' => 'required',
        'referee1_contact' => 'required',
        'referee2_name' => 'required',
        'referee2_relationship' => 'required',
        'referee2_contact' => 'required',
        'st_chair_name' => 'required',
        'st_chair_contact' => 'required',
        'lc_chair_name' => 'required',
        'lc_chair_contact' => 'required',

    ];

    public function submit(){
        $this->validate();
        dd($this->state());
        $this->nextStep();
    }
    public function render()
    {
        return view('livewire.clients.create.steps.referee-step');
    }
}

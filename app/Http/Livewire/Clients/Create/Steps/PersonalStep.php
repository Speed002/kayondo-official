<?php

namespace App\Http\Livewire\Clients\Create\Steps;

use Illuminate\Validation\Rule;
use Spatie\LivewireWizard\Components\StepComponent;

class PersonalStep extends StepComponent
{
    // #[Rule('required')]
    public $name;
    public $dob;
    public $contact;
    public $nin;
    public $residence;
    public $stage;
    public $doa;
    public $occupation;
    public $father;
    public $father_contact;
    public $mother;
    public $mother_contact;

    protected $rules = [
        'name' => 'required',
        'dob' => 'required',
        'contact' => 'required',
        'nin' => 'required',
        'residence' => 'required',
        'stage' => 'required',
        'doa' => 'required',
        'occupation' => 'required',
        'father' => 'required',
        'father_contact' => 'required',
        'mother' => 'required',
        'mother_contact' => 'required'
    ];

    public function submit(){
        $this->validate();
        sleep(3);
        $this->nextStep();
    }
    public function render()
    {
        return view('livewire.clients.create.steps.personal-step');
    }
}

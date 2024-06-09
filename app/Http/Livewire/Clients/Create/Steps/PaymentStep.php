<?php

namespace App\Http\Livewire\Clients\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class PaymentStep extends StepComponent
{
    public $initial_deposit;
    public $weekly_deposit;
    public $agreed_months;
    public $total_weeks;
    public $selling_price;
    public $starting_week;
    public $agreement_place;

    protected $rules = [
        'initial_deposit' => 'required',
        'weekly_deposit' => 'required',
        'agreed_months' => 'required',
        'total_weeks' => 'required',
        'selling_price' => 'required',
        'starting_week' => 'required',
        'agreement_place' => 'required'
    ];

    public function submit(){
        $this->validate();
        sleep(3);
        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.clients.create.steps.payment-step');
    }
}

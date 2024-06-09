<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;

class ClientItem extends Component
{
    public Client $client;
    public function render()
    {
        return view('livewire.clients.client-item');
    }
}

<?php

namespace App\Livewire\Client;

use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        return view('livewire.client.services')
            ->layout('layouts.app', ['title' => 'Our Services - DeshaEmart']);
    }
}

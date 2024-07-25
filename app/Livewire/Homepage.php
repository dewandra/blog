<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        $services = Service::orderBy('title', 'ASC')->get();
        return view('livewire.homepage', [
            'services' => $services
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Models\Faq;
use Livewire\Component;

class FaqPage extends Component
{
    public function render()
    {
        $faq = Faq::where('status',1)->orderBy('question', 'ASC')->get();
        return view('livewire.faq-page',[
            'faq' => $faq
        ]);
    }
}

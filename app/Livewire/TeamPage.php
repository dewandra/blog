<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class TeamPage extends Component
{
    public function render()
    {
        $members = Member::orderBy('name', 'ASC')->get();

        return view('livewire.team-page',[
            'members' => $members
        ]);
    }
}

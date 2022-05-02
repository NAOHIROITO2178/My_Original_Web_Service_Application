<?php

namespace App\Http\Livewire;

use App\Models\Snsuser;
use Livewire\Component;

class Snsusers extends Component
{
    public function render()
    {
        $snsusers = Snsuser::orderBy('id', 'DESC')->get();
        return view('livewire.snsusers.index', compact('snsusers'));
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;

class StatsGrid extends Component
{
    public Account $account;

    public function render()
    {
        return view('livewire.stats-grid');
    }
}

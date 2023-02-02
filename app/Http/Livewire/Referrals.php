<?php

namespace App\Http\Livewire;

use App\Models\Referral;
use Livewire\Component;

class Referrals extends Component
{
    public $searchToken; 
   

    public function render()
    {
        return view('livewire.referrals.index_ref',['referrals'=>Referral::where('description', 'LIKE', '%' . $this->searchToken . '%')->latest()->paginate(10)]);
    }
}

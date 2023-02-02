<?php

namespace App\Http\Livewire;

use App\Models\Legislation;
use Livewire\Component;
use Livewire\WithPagination;

class Ordinances extends Component
{
    use WithPagination;

        public $searchToken; 

        // public function mount(){
        //     $this->legislations = Legislation::where('legislationtype_id',2)->get();
        // }


        public function render()
        {
            // $this->legislations = Legislation::where('legislationtype_id',2)->where('title','LIKE','%'.$this->searchToken.'%')->get();
            return view('livewire.ordinances.index',['legislations' => Legislation::where('legislationtype_id',2)
            ->where('title','LIKE','%'.$this->searchToken.'%')->paginate(50)]);
        }
    
}

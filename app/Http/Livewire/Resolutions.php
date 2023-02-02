<?php

namespace App\Http\Livewire;

use App\Models\Legislation;
use Livewire\Component;
use Livewire\WithPagination;

class Resolutions extends Component
{
    use WithPagination;

    public $searchToken; 

    // public function mount(){
    //     $this->legislations = Legislation::where('legislationtype_id',1)->get();
    // }

    
    public function render()
    {
        // $this->legislations = Legislation::where('legislationtype_id',1)->where('title','LIKE','%'.$this->searchToken.'%')->get();
        return view('livewire.resolutions.index', ['legislations' => Legislation::where('legislationtype_id',1)
        ->where('title','LIKE','%'.$this->searchToken.'%')->paginate(50)]);
    }
}

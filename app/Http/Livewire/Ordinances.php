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
            // return view('livewire.ordinances.index',['legislations' => Legislation::where('legislationtype_id',2)
            // ->whereRaw('title','LIKE','%'.$this->searchToken.'%')
            // ->whereRaw("((legislations.title LIKE '%".$this->searchToken."%') OR (legislations.firstname LIKE '%".$this->searchToken."%'))")
            // ->paginate(50)]);

            return view('livewire.ordinances.index', ['legislations' => Legislation::select('legislations.*')
            ->join('sbmembers','sbmembers.id', 'legislations.sbmember_id')
            ->whereRaw("((legislations.title LIKE '%".$this->searchToken."%') OR (sbmembers.name LIKE '%".$this->searchToken."%') OR (sbmembers.code LIKE '%".$this->searchToken."%') OR (legislations.referencenumber LIKE '%".$this->searchToken."%'))")
            ->where('legislations.legislationtype_id', 2)
            ->orderBy('legislations.referencenumber', 'DESC')
            ->paginate(50)]);
        }

        
    
}

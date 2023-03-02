<?php

namespace App\Http\Livewire;

use App\Models\Sbmember;
use Livewire\Component;

class Sbmembers extends Component
{
    public $openAddModal = false;
    public $name,$position, $code, $status, $political_year, $sbmember_id;

    public function render()
    {
        return view('livewire.sbmembers.sbmembers_index',['sbmembers' => Sbmember::all()]);
    }

    public function showAddModal(){
        $this->openAddModal = true;
    }

    public function resetInputFields(){
        $this->name = "";
        $this->position = "";
        $this->code = "";
        $this->political_year = "";
    }

    public function closeAddModal(){
        $this->openAddModal = false;
    }

    public function addSbmember(){
        $this->validate([
            'name'=> 'required',
            'position'=> 'required',
            'political_year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')),
        ]);

        Sbmember::updateOrCreate(['id' => $this->sbmember_id], [
            'name' => $this->name,
            'position' => $this->position,
            'code' => $this->code,
            'political_year' => $this->political_year,
        ]);

        session()->flash('message',
            $this->sbmember_id ? 'SB Member Updated Successfully.' : 'SB Member Created Successfully.');
        $this->closeAddModal();
        $this->resetInputFields();
    }

    public function edit($sbmember_id){
        $sbmember = Sbmember::find($sbmember_id);
        $this->name = $sbmember->name; 
        $this->position = $sbmember->position; 
        $this->code = $sbmember->code; 
        $this->sbmember_id = $sbmember->id;
        $this->political_year = $sbmember->political_year;
        $this->showAddModal();
    }

    public function updateStatus($sbmember_id, $sbstatus)
    {
        $sbmember = Sbmember::find($sbmember_id);

        if($sbstatus == 1)
        {
            $sbmember->update([
                  'status' => 0  
            ]);
        }

        elseif($sbstatus == 0)
        {
            $sbmember->update([
                  'status' => 1  
            ]);
        }

    }
}

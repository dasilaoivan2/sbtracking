<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Classification;
use Livewire\Component;

class Classifications extends Component
{

    public $classifications,$openAddModal = false,$name,$category_id,$classification_id;

    public function mount(){
        $this->classifications = Classification::all();
        $this->categories = Category::all();
    }

    public function render()
    {
        $this->classifications = Classification::all();
        $this->categories = Category::all();
        return view('livewire.classifications.index');
    }

    public function showAddModal(){
        $this->openAddModal = true;
    }

    public function resetInputFields(){
        $this->name = "";
        $this->category_id= "";
    }

    public function closeAddModal(){
        $this->openAddModal = false;
    }

    public function addClassification(){
        $this->validate([
            'name'=> 'required',
            'category_id'=> 'required',
        ]);

        Classification::updateOrCreate(['id' => $this->classification_id], [
            'name' => $this->name,
            'category_id' => $this->category_id,
        ]);

        session()->flash('message',
            $this->category_id ? 'Classification Updated Successfully.' : 'Classification Created Successfully.');
        $this->closeAddModal();
        $this->resetInputFields();
    }

    public function edit($classification_id){
        $classification = Classification::find($classification_id);
        $this->name = $classification->name; 
        $this->category_id = $classification->category_id;
        $this->showAddModal();
    }
}

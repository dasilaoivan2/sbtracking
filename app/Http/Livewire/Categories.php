<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{

    public $openAddModal = false,$name,$category_id; 

    public function render()
    {
        return view('livewire.categories.cat_index',['categories'=>Category::all()]);
    }

    public function showAddModal(){
        $this->openAddModal = true;
    }

    public function resetInputFields(){
        $this->name = "";
    }

    public function closeAddModal(){
        $this->openAddModal = false;
    }

    public function addCategory(){
        $this->validate([
            'name'=> 'required',
        ]);

        Category::updateOrCreate(['id' => $this->category_id], [
            'name' => $this->name,
        ]);

        session()->flash('message',
            $this->category_id ? 'Category Updated Successfully.' : 'Category Created Successfully.');
        $this->closeAddModal();
        $this->resetInputFields();
    }

    public function edit($category_id){
        $category = Category::find($category_id);
        $this->name = $category->name; 
        $this->category_id = $category->id;
        $this->showAddModal();
    }

}

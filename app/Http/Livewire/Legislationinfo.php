<?php

namespace App\Http\Livewire;

use App\Models\Author;
use App\Models\Coauthor;
use App\Models\Legislation;
use App\Models\Sbmember;
use Livewire\Component;

class Legislationinfo extends Component
{

    public $legislation_id, $legislation, $showAddAuthorModal = false, $sbmembers, $sbmember_id, $type;

    public function mount()
    {
        $this->sbmembers = Sbmember::where('status', 1)->get();
        $this->legislation = Legislation::find($this->legislation_id);
    }

    public function render()
    {
        $this->legislation = Legislation::find($this->legislation_id);
        return view('livewire.legislationinfo.index');
    }

    public function openAddAuthorModal($type)
    {
        $this->showAddAuthorModal = true;
        $this->sbmember_id = '';
        $this->type = $type;
    }



    public function addAuthor()
    {
        $this->validate([
            'sbmember_id' => 'required',
        ]);

        if ($this->type == "1") {

            $sbmember = Author::where('sbmember_id',$this->sbmember_id)->where('legislation_id',$this->legislation_id)->first();

            if (empty($sbmember)) {
                Author::create([
                    'sbmember_id' => $this->sbmember_id,
                    'legislation_id' => $this->legislation_id,
                ]);
            }
        }

        if ($this->type == "2") {

            $sbmember = Coauthor::where('sbmember_id',$this->sbmember_id)->where('legislation_id',$this->legislation_id)->first();

            if (empty($sbmember)) {
                Coauthor::create([
                    'sbmember_id' => $this->sbmember_id,
                    'legislation_id' => $this->legislation_id,
                ]);
            }
        }

        $this->reset(['sbmember_id', 'showAddAuthorModal', 'type']);
    }

    public function deleteAuthor($author_id){
        Author::find($author_id)->delete();
    }
    
    public function deleteCoAuthor($author_id){
        Coauthor::find($author_id)->delete();
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Classification;
use App\Models\Docclassification;
use App\Models\Incdocfile;
use App\Models\Incomingdocument;
use App\Models\Referral;
use App\Models\Referraltype;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;





class Incomingdocuments extends Component
{

    use WithPagination;

    use WithFileUploads;


    public $description, $category_id, $categories, $types, $type_id, $openAddModal = false, $incomingdocument_id;
    public $classifications, $searchToken;
    public $photos = [], $classArray=[];
    public $showReferralModal = false, $referraltypes;
    public $referraltype_id, $rtdescription;


    public function mount()
    {
        $this->referraltypes = Referraltype::all();
        $this->categories = Category::all();
        $this->types = Type::all();
    }

    public function render()
    {
        $this->classifications = Classification::where('category_id',$this->category_id)->get();
        return view('livewire.incomingdocuments.incdoc_index', ['incdocs' => Incomingdocument::where('description', 'LIKE', '%' . $this->searchToken . '%')->latest()->paginate(10)]);
    }

    public function showAddModal()

    {
        $this->openAddModal();
        $this->resetInputFields();

    }

    public function openAddModal()
    {
        $this->openAddModal = true;
    }

    public function resetInputFields()
    {
        $this->type_id = "";
        $this->description = "";
        $this->category_id = "";
        $this->incomingdocument_id = "";
        $this->classArray = [];
    }

    public function closeAddModal()
    {
        $this->openAddModal = false;
    }

    public function addIncomingDocument()
    {

        $incdocid = null;

        $this->validate([
            'type_id' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'photos.*' => 'mimes:jpg,jpeg,png,pdf|max:4096', // 4MB Max

        ]);

        $incdocid = Incomingdocument::updateOrCreate(['id' => $this->incomingdocument_id], [
            'type_id' => $this->type_id,
            'description' => $this->description,
            'category_id' => $this->category_id,

        ])->id;

        foreach ($this->photos as $photo) {

            $filename = date('YMD') . $photo->getClientOriginalName();
            $photo->storeAs('public/incomingdocuments', $filename);


            Incdocfile::create([
                'filename' => $filename,
                'incomingdocument_id' => $incdocid,
            ]);
        }

        if (count($this->classArray) > 0) {
          
            foreach ($this->classArray as $class) {
                Docclassification::updateOrCreate(['incomingdocument_id' => $incdocid, 'classification_id' => $class['id']], [
                    'incomingdocument_id' => $incdocid,
                    'classification_id' => $class['id'],
                ]);
            }
        }
        session()->flash(
            'message',
            $this->incomingdocument_id ? 'Incoming Document Updated Successfully.' : 'Incoming Document Created Successfully.'
        );
        $this->closeAddModal();
        $this->resetInputFields();
    }

    public function edit($incomingdocument_id)
    {
        $incdoc = Incomingdocument::find($incomingdocument_id);
        $this->type_id = $incdoc->type_id;
        $this->description = $incdoc->description;
        $this->category_id = $incdoc->category_id;
        $this->incomingdocument_id = $incdoc->id;

        foreach($incdoc->docclassifications as $classification){
            array_push($this->classArray,['id'=>$classification->id,'name'=>$classification->name]);
        }

        $this->openAddModal();
    }

    public function deleteClassification($docclassification_id)
    {

        Docclassification::find($docclassification_id)->delete();
    }

    public function deleteFile($file_id)
    {

        $file = Incdocfile::find($file_id);
        $filename = $file->filename;
        $file->delete();

        Storage::delete('public/incomingdocuments/' . $filename);
    }

    public function refer($incdoc_id)
    {
        $this->showReferralModal = true;
        $this->incomingdocument_id = $incdoc_id;
    }

    public function addReferral()
    {
        $this->validate([
            'referraltype_id' => 'required',
            'rtdescription' => 'required',
        ]);

        Referral::create([
            'referraltype_id' => $this->referraltype_id,
            'incomingdocument_id' => $this->incomingdocument_id,
            'description' => $this->rtdescription,
        ]);

        $this->referraltype_id = '';
        $this->rtdescription = '';
        $this->incomingdocument_id = '';
        $this->showReferralModal = false;

    }

    public function addClassificationArray($classification_id){

        $classification = Classification::find($classification_id);

        array_push($this->classArray,['id'=>$classification->id,'name'=>$classification->name]);

    }

    public function removeArray($index){

        unset($this->classArray[$index]);

    }
}

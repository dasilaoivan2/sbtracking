<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Activityfile;
use App\Models\Activitytype;
use App\Models\Legislation;
use App\Models\Legislationfile;
use App\Models\Legislationtype;
use App\Models\Referral;
use Livewire\Component;
use Livewire\WithFileUploads;

class Referralinfo extends Component
{

    use WithFileUploads;

    public $dateenacted, $legislation_id, $referencenumber;
    public $referral_id,$referral,$showActivityModal=false,$activitytypes,$activitydescription,$activitysubject,$dateofactivity,$activitytype_id,$activity_id,$showAddFileModal=false,$activityattachment,$activityfiledesc,$showAddLegislationModal=false,$showEditLegislationModal=false,$legislationtypes,$legislation_title,$legislation_description,$legislationtype_id; 

    public $legislationfilenames = [], $legislationfiles;

    public function mount()
    {
        $this->activitytypes=Activitytype::all();
        $this->legislationtypes=Legislationtype::all();
        $this->referral = Referral::find($this->referral_id);
    }

    public function render()
    {
        $this->referral = Referral::find($this->referral_id);
        return view('livewire.referralinfo.info_index');
    }

    public function openActivityModal(){
        $this->showActivityModal = true;
    }

    public function resetInputFields(){
        $this->reset(['activitydescription','dateofactivity','activitytype_id','showActivityModal', 'activitysubject', 'dateenacted']);
    }

    public function addActivity(){

        $this->validate([
            'activitydescription'=>'required',
            'activitysubject'=>'required',
            'dateofactivity'=>'required',
            'activitytype_id'=>'required',
        ]);

        Activity::updateOrCreate(['id' => $this->activity_id], [
            'description' => $this->activitydescription,
            'subject' => $this->activitysubject,
            'dateofactivity' => $this->dateofactivity,
            'activitytype_id' => $this->activitytype_id,
            'referral_id' => $this->referral_id,
        ]);

        $this->resetInputFields();

    }

    public function editActivity($activity_id){

        $activity = Activity::find($activity_id);
        $this->activity_id = $activity_id; 
        $this->activitydescription = $activity->description; 
        $this->activitysubject = $activity->subject; 
        $this->dateofactivity = $activity->dateofactivity; 
        $this->activitytype_id = $activity->activitytype_id; 
        $this->openActivityModal();

    }

    public function addFiles($activity_id){
        $this->showAddFileModal=true;
        $this->activity_id = $activity_id;
    }

    public function storeFiles(){
        $this->validate([
            'activityattachment' => 'mimes:jpg,jpeg,png,pdf|max:4096',
            'activityfiledesc'=>'required',
        ]);
 
        $filename = date('YMD') . $this->activityattachment->getClientOriginalName();
        $this->activityattachment->storeAs('public/activityfiles', $filename);

        Activityfile::create([
            'description' => $this->activityfiledesc,
            'filename' => $filename,
            'activity_id' => $this->activity_id,
        ]);

        $this->reset('activityfiledesc','activity_id','showAddFileModal');

    }

    public function resetLegislationFields()
    {
        $this->reset(['referencenumber','legislation_title', 'legislation_description', 'legislationtype_id', 'dateenacted','legislation_id']);
        $this->legislationfilenames = [];
    }

    public function openAddLegislationModal(){
        $this->showAddLegislationModal=true;
        $this->resetLegislationFields(); 
    }

    public function openEditLegislationModal(){
        $this->showEditLegislationModal=true; 
    }

    public function addLegislation(){
        

        $this->validate([
            'legislation_title'=>'required',
            'legislation_description'=>'required',
            'referencenumber'=>'required',
            'legislationtype_id'=>'required',
            'dateenacted'=>'required',
        ]);

        $legislation = Legislation::create([
            'title'=>$this->legislation_title,
            'description'=>$this->legislation_description,
            'referencenumber'=>$this->referencenumber,
            'legislationtype_id'=>$this->legislationtype_id,
            'referral_id'=>$this->referral_id,
            'dateenacted'=>$this->dateenacted,
        ]);

        foreach($this->legislationfilenames as $legislationfilename)
        {
            $filename = date('YMD') . $legislationfilename->getClientOriginalName();
            $legislationfilename->storeAs('public/legislationfiles', $filename);


            Legislationfile::create([
                'filename' => $filename,
                'legislation_id' => $legislation->id,
            ]);
        }

        
        return redirect()->route('legislation',['legislation_id'=>$legislation->id]);

    }

    public function editLegislation($legislation_id){

        $legislation = Legislation::find($legislation_id); 
        $this->legislation_id = $legislation_id;
        $this->legislation_title = $legislation->title; 
        $this->legislation_description = $legislation->description; 
        $this->referencenumber = $legislation->referencenumber; 
        $this->legislationtype_id = $legislation->legislationtype_id; 
        $this->dateenacted = $legislation->dateenacted; 

        $this->legislationfiles = $legislation->legislationfiles;

        $this->openEditLegislationModal();

    }

    public function updateLegislation()
    {
        $this->validate([
            'legislation_title'=>'required',
            'legislation_description'=>'required',
            'referencenumber'=>'required',
            'legislationtype_id'=>'required',
            'dateenacted'=>'required',
        ]);

        $legislation = Legislation::find($this->legislation_id);
        $legislation->update([
            'title'=>$this->legislation_title,
            'description'=>$this->legislation_description,
            'referencenumber'=>$this->referencenumber,
            'legislationtype_id'=>$this->legislationtype_id,
            'referral_id'=>$this->referral_id,
            'dateenacted'=>$this->dateenacted,
        ]);

        foreach($this->legislationfilenames as $legislationfilename)
        {
            $filename = date('YMD') . $legislationfilename->getClientOriginalName();
            $legislationfilename->storeAs('public/legislationfiles', $filename);


            Legislationfile::create([
                'filename' => $filename,
                'legislation_id' => $legislation->id,
            ]);
        }

        $this->resetLegislationFields();
        return redirect()->route('legislation',['legislation_id'=>$legislation->id]);
    }

    public function deleteFile($id)
    {
        Legislationfile::find($id)->delete();
        $legislation = Legislation::find($this->legislation_id);
        $this->legislationfiles = $legislation->legislationfiles;
    }

    public function addFile()
    {
        foreach ($this->legislationfilenames as $legislationfilename) {

            $filename = date('YMD') . $legislationfilename->getClientOriginalName();
            $legislationfilename->storeAs('public/legislationfiles', $filename);


            Legislationfile::create([
                'filename' => $filename,
                'legislation_id' => $this->legislation_id,
            ]);
        }
        $this->legislationfilenames = [];
        $legislation = Legislation::find($this->legislation_id);
        $this->legislationfiles = $legislation->legislationfiles;
    }


}
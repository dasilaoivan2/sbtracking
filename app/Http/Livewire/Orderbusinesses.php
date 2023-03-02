<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Businessreference;
use App\Models\Incomingdocument;
use App\Models\Orderactivity;
use App\Models\Orderbusfile;
use App\Models\Orderbusiness;
use App\Models\Ordercategory;
use App\Models\Orderincdoc;
use App\Models\Orderunfinbus;
use App\Models\Othermatter;
use App\Models\Sbmember;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Orderbusinesses extends Component
{
    use WithPagination;

    use WithFileUploads;


    public $ordercategories, $sbmembers;

    public $description, $number_order_sb, $number_order_session, $session_date, $invocation, $ordercategory_id, $reading;
    public $orderbusiness_id;
    public $orderbusinessfiles;


    public $references, $referencelists = [], $title, $proponent, $referencefile;

    public $othermatters, $othermatterlists = [], $othermatter_desc;

    public $incdocArray = [], $incomingdocument_id = [];
    public $incdocUnfinArray = [], $unfinincomingdocument_id = [];
    public $activityArray = [], $activity_id = [];

    public $photos = [];
    
    public $searchToken;
    public $searchIncDoc;
    public $searchIncDocUnFin;
    public $searchIncActivity;

    public $openAddModal = false;
    public $openEditModal = false;
    public $referenceModal = false;
    public $referenceEditModal = false;
    public $othermatterModal = false;
    public $othermatterEditModal = false;

    public function mount()
    {
        $this->ordercategories = Ordercategory::all();
        
        $this->sbmembers = Sbmember::where('status', 1)->get();
    }


    public function render()
    {
        


        return view('livewire.orderbusinesses.orderbus_index', ['orderbusinesses' => Orderbusiness::where('description', 'LIKE', '%' . $this->searchToken . '%')->latest()->paginate(10, ['*'], 'orderbusinesspagination'), 'incomingdocuments' => Incomingdocument::where('description', 'LIKE', '%' . $this->searchIncDoc . '%')->paginate(10, ['*'], 'incdocspagination'), 'activities' => Activity::where('description', 'LIKE', '%' . $this->searchIncActivity . '%')->paginate(10, ['*'], 'activitiespagination'), 'unfinincomingdocuments' => Incomingdocument::where('description', 'LIKE', '%' . $this->searchIncDocUnFin . '%')->paginate(10, ['*'], 'unfinpagination')]);
    }



    public function showAddModal()
    {
        $this->openAddModal();
        $this->resetInputFields();

    }

    public function showEditModalMatter()
    {
        $this->othermatterEditModal = true;
    }

    public function closeEditModalMatter()
    {
        $this->othermatterEditModal = false;
    }

    public function showAddModalMatter()
    {
        $this->othermatterModal = true;
    }

    public function closeAddModalMatter()
    {
        $this->othermatterModal = false;
    }
    
    public function showEditModalRef()
    {
        $this->referenceEditModal = true;
    }

    public function closeEditModalRef()
    {
        $this->referenceEditModal = false;
    }

    public function showAddModalRef()
    {
        $this->referenceModal = true;
    }

    public function closeAddModalRef()
    {
        $this->referenceModal = false;
    }

    public function openAddModal()
    {
        $this->openAddModal = true;
    }

    public function openEditModal()
    {
        $this->openEditModal = true;
    }

    public function resetInputFields()
    {
        $this->description = "";
        $this->number_order_sb = ""; 
        $this->number_order_session = "";
        $this->session_date = ""; 
        $this->invocation = ""; 
        $this->ordercategory_id = "";
        $this->reading = '';
        
        $this->photos = [];
        $this->orderbusiness_id = null;

        $this->referencelists = [];
        $this->othermatterlists = [];
        $this->resetArrayCheckbox();
    }

    public function resetArrayCheckbox()
    {
        $this->incomingdocument_id = [];
        $this->unfinincomingdocument_id = [];
        $this->incdocUnfinArray = [];
        
        $this->incdocArray = [];
        $this->activity_id = [];
        $this->activityArray = [];
    }

    public function closeAddModal()
    {
        return redirect()->route('orderbusiness');
        $this->openAddModal = false;
        
    }

    public function closeEditModal()
    {
        return redirect()->route('orderbusiness');
        $this->openEditModal = false;
    }

    public function addIncDocArray($id)
    {
        if ($this->incdocArray[$id] == 1) {
            $this->incomingdocument_id[] = $id;
        } else {
            for ($i = 0; $i < count($this->incomingdocument_id); $i++) {
                if ($this->incomingdocument_id[$i] == $id) {
                    unset($this->incomingdocument_id[$i]);
                    $this->incomingdocument_id = array_values($this->incomingdocument_id);
                }
            }

        }
    }

    public function addIncDocUnfinArray($id)
    {
        if ($this->incdocUnfinArray[$id] == 1) {
            $this->unfinincomingdocument_id[] = $id;
        } else {
            for ($i = 0; $i < count($this->unfinincomingdocument_id); $i++) {
                if ($this->unfinincomingdocument_id[$i] == $id) {
                    unset($this->unfinincomingdocument_id[$i]);
                    $this->unfinincomingdocument_id = array_values($this->unfinincomingdocument_id);
                }
            }

        }
    }

    public function addActivityArray($id)
    {
        if ($this->activityArray[$id] == 1) {
            $this->activity_id[] = $id;
        } else {
            for ($i = 0; $i < count($this->activity_id); $i++) {
                if ($this->activity_id[$i] == $id) {
                    unset($this->activity_id[$i]);
                    $this->activity_id = array_values($this->activity_id);
                }
            }

        }
    }

    public function store()
    {
        $this->validate([
            'description' => 'required',
            'number_order_sb' => 'required',
            'number_order_session' => 'required',
            'session_date' => 'required',
            'ordercategory_id' => 'required',
            'invocation' => 'required',
            'incomingdocument_id' => 'required',
            'reading' => 'required',
            'photos.*' => 'mimes:jpg,jpeg,png,pdf|max:4096', // 4MB Max

        ]);

        $orderbusiness = Orderbusiness::create([
            'description' => $this->description,
            'number_order_sb' => $this->number_order_sb,
            'number_order_session' => $this->number_order_session,
            'session_date' => $this->session_date,
            'ordercategory_id' => $this->ordercategory_id,
            'invocation' => $this->invocation,
            'reading' => $this->reading,
        ]);

        foreach ($this->photos as $photo) {

            $filename = date('YMD') . $photo->getClientOriginalName();
            $photo->storeAs('public/orderbusiness', $filename);


            Orderbusfile::create([
                'filename' => $filename,
                'orderbusiness_id' => $orderbusiness->id,
            ]);
        }

        if(count($this->incomingdocument_id) > 0)
        {
            foreach($this->incomingdocument_id as $incdoc_id)
            {
                Orderincdoc::create([
                    'incomingdocument_id' => $incdoc_id,
                    'orderbusiness_id' => $orderbusiness->id
                ]);
            }
        }

        if(count($this->unfinincomingdocument_id) > 0)
        {
            foreach($this->unfinincomingdocument_id as $unfinincdoc_id)
            {
                Orderunfinbus::create([
                    'incomingdocument_id' => $unfinincdoc_id,
                    'orderbusiness_id' => $orderbusiness->id
                ]);
            }
        }

        if(count($this->activity_id) > 0)
        {
            foreach($this->activity_id as $act_id)
            {
                Orderactivity::create([
                    'activity_id' => $act_id,
                    'orderbusiness_id' => $orderbusiness->id
                ]);
            }
        }

        if(count($this->referencelists) > 0)
        {
            foreach($this->referencelists as $referencelist)
            {
                if($referencelist['referencefile'] != NULL)
                    {
                        

                        $filename = date('YMD') . $referencelist['referencefile']->getClientOriginalName();
                        $referencelist['referencefile']->storeAs('public/referencefile', $filename);
                    }
                    else{
                        $filename = NULL;
                    }
            

            Businessreference::create([
                'orderbusiness_id' => $orderbusiness->id,
                'title' => $referencelist['title'],
                'proponent' => $referencelist['proponent'],
                'referencefile' => $filename
                ]);
            }
        }

        if(count($this->othermatterlists) > 0)
        {
            foreach($this->othermatterlists as $othermatterlist)
            {
                Othermatter::create([
                    'orderbusiness_id' => $orderbusiness->id,
                    'description' => $othermatterlist['othermatter_desc']
                ]);
            }
        }

        session()->flash('message', 'Order of Business Created Successfully.');
        $this->closeAddModal();
        $this->resetInputFields();
        // return redirect(request()->header('Referer'));
        return redirect()->route('orderbusiness');

    }

    public function edit($id)
    {
        $this->resetArrayCheckbox();


        $orderbusiness = Orderbusiness::find($id);
        $this->orderbusiness_id = $id;

        $this->description = $orderbusiness->description;
        $this->number_order_sb = $orderbusiness->number_order_sb;
        $this->number_order_session = $orderbusiness->number_order_session;
        $this->session_date = $orderbusiness->session_date;
        $this->ordercategory_id = $orderbusiness->ordercategory_id;
        $this->invocation = $orderbusiness->invocation;
        $this->reading = $orderbusiness->reading;

        $this->references = $orderbusiness->businessreferences;
        

        foreach($orderbusiness->incomingdocuments as $incdoc)
         {
            $this->incdocArray[$incdoc->id] = 1;
            $this->incomingdocument_id[] = $incdoc->id; 
         }

         foreach($orderbusiness->unfinishbusinesses as $unfinincdoc)
         {
            $this->incdocUnfinArray[$unfinincdoc->id] = 1;
            $this->unfinincomingdocument_id[] = $unfinincdoc->id; 
         }

         foreach($orderbusiness->activities as $activity)
         {
            $this->activityArray[$activity->id] = 1;
            $this->activity_id[] = $activity->id; 
         }

         $this->orderbusinessfiles = $orderbusiness->orderbusfiles;
         $this->othermatters = $orderbusiness->othermatters;



        $this->openEditModal();


    }

    public function addReferenceInEdit()
    {
        $orderbusiness = Orderbusiness::find($this->orderbusiness_id);

        if($this->referencefile != NULL)
        {
            $filename = date('YMD') . $this->referencefile->getClientOriginalName();
            $this->referencefile->storeAs('public/referencefile', $filename);
        }
        else{
            $filename = NULL;
        }
            

            Businessreference::create([
                'orderbusiness_id' => $this->orderbusiness_id,
                'title' => $this->title,
                'proponent' => $this->proponent,
                'referencefile' => $filename
                ]);

        $this->references = $orderbusiness->businessreferences;
        $this->clearReferenceField();
        $this->closeEditModalRef();
    }

    public function addOthermatterInEdit()
    {
        $orderbusiness = Orderbusiness::find($this->orderbusiness_id);

            Othermatter::create([
                'orderbusiness_id' => $this->orderbusiness_id,
                'description' => $this->othermatter_desc
                ]);

        $this->othermatters = $orderbusiness->othermatters;
        $this->clearOthermatterField();
        $this->closeEditModalMatter();
    }

    public function addPhoto()
    {
        foreach ($this->photos as $photo) {

            $filename = date('YMD') . $photo->getClientOriginalName();
            $photo->storeAs('public/orderbusiness', $filename);


            Orderbusfile::create([
                'filename' => $filename,
                'orderbusiness_id' => $this->orderbusiness_id,
            ]);
        }
        $this->photos = [];
        $orderbusiness = Orderbusiness::find($this->orderbusiness_id);
        $this->orderbusinessfiles = $orderbusiness->orderbusfiles;
    }

    public function deletePhoto($id)
    {
        Orderbusfile::find($id)->delete();
        $orderbusiness = Orderbusiness::find($this->orderbusiness_id);
        $this->orderbusinessfiles = $orderbusiness->orderbusfiles;
    }

    public function update()
    {
        if($this->orderbusiness_id)
        {
            $this->validate([
                'description' => 'required',
                'number_order_sb' => 'required',
                'number_order_session' => 'required',
                'session_date' => 'required',
                'ordercategory_id' => 'required',
                'invocation' => 'required',
                'incomingdocument_id' => 'required',
                'reading' => 'required',
                'photos.*' => 'mimes:jpg,jpeg,png,pdf|max:4096', // 4MB Max
    
            ]);

            $orderbusiness = Orderbusiness::find($this->orderbusiness_id);

            $orderbusiness->update([
                'description' => $this->description,
                'number_order_sb' => $this->number_order_sb,
                'number_order_session' => $this->number_order_session,
                'session_date' => $this->session_date,
                'ordercategory_id' => $this->ordercategory_id,
                'invocation' => $this->invocation,
                'reading' => $this->reading,
            ]);

            foreach ($this->photos as $photo) {

                $filename = date('YMD') . $photo->getClientOriginalName();
                $photo->storeAs('public/orderbusiness', $filename);
    
    
                Orderbusfile::create([
                    'filename' => $filename,
                    'orderbusiness_id' => $this->orderbusiness_id,
                ]);
            }

            Orderunfinbus::where('orderbusiness_id', $this->orderbusiness_id)->delete();
            Orderincdoc::where('orderbusiness_id', $this->orderbusiness_id)->delete();
            Orderactivity::where('orderbusiness_id', $this->orderbusiness_id)->delete();
    
            if(count($this->incomingdocument_id) > 0)
            {
                foreach($this->incomingdocument_id as $incdoc_id)
                {
                    Orderincdoc::create([
                        'incomingdocument_id' => $incdoc_id,
                        'orderbusiness_id' => $orderbusiness->id
                    ]);
                }
            }

            if(count($this->unfinincomingdocument_id) > 0)
            {
                foreach($this->unfinincomingdocument_id as $unfinincdoc_id)
                {
                    Orderunfinbus::create([
                        'incomingdocument_id' => $unfinincdoc_id,
                        'orderbusiness_id' => $orderbusiness->id
                    ]);
                }
            }

            if(count($this->activity_id) > 0)
            {
            foreach($this->activity_id as $act_id)
            {
                Orderactivity::create([
                    'activity_id' => $act_id,
                    'orderbusiness_id' => $orderbusiness->id
                ]);
            }
            }
    
            session()->flash('message', 'Order of Business Updated Successfully.');
            $this->closeEditModal();
            $this->resetInputFields();
            // return redirect(request()->header('Referer'));
            return redirect()->route('orderbusiness');
        }
    }

    public function clearReferenceField()
    {
        $this->title = '';
        $this->proponent = '';
        $this->referencefile = '';
    }

    public function clearOthermatterField()
    {
        $this->othermatter_desc = '';
    }

    public function addReference()
    {
        $this->validate([
            'title' => 'required',
            'proponent' => 'required',
            'referencefile' => 'mimes:jpg,jpeg,png,pdf|max:4096',
        ],
        [
            'title.required' => 'Required Field',
            'proponent.required' => 'Required Field',
        ]);

        $this->referencelists[] = [
            'title' => $this->title,
            'proponent' => $this->proponent,
            'referencefile' => $this->referencefile,
        ];

        $this->clearReferenceField();
        $this->closeAddModalRef();
    }

    public function addOthermatter()
    {
        $this->validate([
            'othermatter_desc' => 'required'
        ],
        [
            'othermatter_desc.required' => 'Required Field'
        ]);

        $this->othermatterlists[] = [
            'othermatter_desc' => $this->othermatter_desc
        ];

        $this->clearOthermatterField();
        $this->closeAddModalMatter();
    }

    public function deleteMatter($index)
    {
        unset($this->othermatterlists[$index]);
        $this->othermatterlists = array_values($this->othermatterlists);


        $this->clearReferenceField();
    }

    public function deleteReference($index)
    {
        unset($this->referencelists[$index]);
        $this->referencelists = array_values($this->referencelists);


        $this->clearReferenceField();
    }

    public function deleteReferenceEdit($id)
    {
        $reference = Businessreference::find($id);
        $oldfilename = $reference->referencefile;
        Storage::delete('public/referencefile/'.$oldfilename);

        $reference->delete();

        $orderbusiness = Orderbusiness::find($this->orderbusiness_id);
        $this->references = $orderbusiness->businessreferences;
    }
    
    public function deleteMatterEdit($id)
    {
        $othermatter = Othermatter::find($id);

        $othermatter->delete();

        $orderbusiness = Orderbusiness::find($this->orderbusiness_id);
        $this->othermatters = $orderbusiness->othermatters;
    }


}

<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class Employees extends Component
{
    public $openAddModal = false,$name,$employee_id,$lastname,$firstname,$middlename,$ext,$position,$cellphone;

    public function render()
    {
        return view('livewire.employees.emp_index',['employees'=>Employee::all()]);
    }

    public function showAddModal(){
        $this->openAddModal = true;
    }

    public function resetInputFields(){
        $this->lastname = "";
        $this->firstname = "";
        $this->middlename = "";
        $this->ext = "";
        $this->position = "";
        $this->cellphone = "";
        $this->employee_id= "";
    }

    public function closeAddModal(){
        $this->openAddModal = false;
    }

    public function addEmployee(){
        $this->validate([
            'lastname'=> 'required',
            'firstname'=> 'required',
            'middlename'=> 'required',
            'position'=> 'required',
            'cellphone'=> 'required',
        ]);

        Employee::updateOrCreate(['id' => $this->employee_id], [
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'ext' => $this->ext,
            'position' => $this->position,
            'cellphone' => $this->cellphone,
        ]);

        session()->flash('message',
            $this->employee_id ? 'Employee Updated Successfully.' : 'Employee Created Successfully.');
        $this->closeAddModal();
        $this->resetInputFields();
    }

    public function edit($employee_id){
        $employee = Employee::find($employee_id);
        $this->lastname = $employee->lastname;
        $this->firstname = $employee->firstname;
        $this->middlename= $employee->middlename;
        $this->ext = $employee->ext;
        $this->position = $employee->position;
        $this->cellphone = $employee->cellphone;
        $this->employee_id = $employee->id;
        $this->showAddModal();
    }

}

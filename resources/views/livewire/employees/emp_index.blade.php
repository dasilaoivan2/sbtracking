<div class="p-12">
    <div class="block">
        <span class="font-bold text-2xl">EMPLOYEES </span>   
        <x-jet-button wire:click="showAddModal"> Add </x-jet-button>

@include('livewire.includes.messages')

    </div>

    <div class="block">
        <table class="w-1/2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Contact No.</th>
                    <th>Action</th>
                </tr>
            </thead>
            @php
                $count=1;
            @endphp
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $employee->fullname() }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->cellphone }}</td>
                    <td>

                        <x-jet-button wire:click="edit({{ $employee->id }})">Edit</x-jet-button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    
@include('livewire.employees.modals.addemployees')

 </div>
 
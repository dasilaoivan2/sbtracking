<div class="p-12">
    <div class="block">
        <span class="font-bold text-2xl">CATEGORIES </span>   
        <x-jet-button wire:click="showAddModal"> Add </x-jet-button>

@include('livewire.includes.messages')

    </div>

    <div class="block">
        <table class="w-1/2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            @php
                $count=1;
            @endphp
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $category->name }}</td>
                    <td>

                        <x-jet-button wire:click="edit({{ $category->id }})">Edit</x-jet-button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    
@include('livewire.categories.modals.addcategories')

 </div>
 
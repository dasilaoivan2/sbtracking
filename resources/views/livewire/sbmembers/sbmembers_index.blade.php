<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('SB MEMBERS') }}
    </h2>
</x-slot>

 <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @include('livewire.includes.messages')

            <x-jet-button class="mb-4" wire:click="showAddModal">
                {{ __('Add') }}
            </x-jet-button>


            <div style="overflow-y: hidden; max-width: 100%;">
                <table class="table-auto w-full text-center">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">#</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Position</th>
                            <th class="px-4 py-2">Code</th>
                            <th class="px-4 py-2">Status</th>
                            <th width="230px" class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $temp = 0; ?>

                        @foreach($sbmembers as $sbmember)
                        <tr>
                            <?php $temp++; ?>
                            <td class="border px-4 py-2">{{$temp}}</td>
                            <td class="border px-4 py-2">{{ $sbmember->name }}</td>
                            <td class="border px-4 py-2">{{ $sbmember->position }}</td>
                            <td class="border px-4 py-2">{{ $sbmember->code }}</td>
                            <td class="border px-4 py-2">

                            @if($sbmember->status == 1)
                            <input type="checkbox" class="font-bolder rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="sb{{$sbmember->id}}" wire:click.debounce="updateStatus({{$sbmember->id}} , 1)"  checked>

                            Active
                            @else

                            <input type="checkbox" class="font-bolder rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="sb{{$sbmember->id}}" wire:click.debounce="updateStatus({{$sbmember->id}} , 0)">

                            Inactive
                            @endif

                            </td>
                            <td class="border">
                                <x-jet-button class="m-2" wire:click="edit({{$sbmember->id}})">
                                    {{ __('Edit') }}
                                </x-jet-button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('livewire.sbmembers.modals.addsbmembers')
</div>
 
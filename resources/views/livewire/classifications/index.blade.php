
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('CLASSIFICATIONS') }}
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
                @include('livewire.classifications.tables.classifications')
            </div>

            
        </div>
    </div>
    @include('livewire.classifications.modals.addclassification')
</div>
 
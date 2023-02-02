<div class="p-12">

    <div class="block">
        <span class="font-bold text-2xl">Classifications </span> <x-jet-button wire:click="showAddModal"> Add </x-jet-button>
    </div>
    
    @include('livewire.classifications.tables.classifications')
    @include('livewire.classifications.modals.addclassification')

</div>
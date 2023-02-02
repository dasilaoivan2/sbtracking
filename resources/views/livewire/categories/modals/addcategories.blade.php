<x-jet-dialog-modal wire:model="openAddModal" maxWidth="2xl">
    <x-slot name="title">
        Category
    </x-slot>

    <x-slot name="content">
        

        <x-jet-input class="w-full" type="text" wire:model="name" placeholder="Type name here..."></x-jet-input>

        @error('name')

        <span class="text-xs font-bold text-red-600 font-italic">Please type name...</span>

        @enderror

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('openAddModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addCategory" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
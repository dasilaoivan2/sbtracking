<x-jet-dialog-modal wire:model="openAddModal" maxWidth="2xl">
    <x-slot name="title">
        Category
    </x-slot>

    <x-slot name="content">
        

    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
        </label>

        <x-jet-input class="w-full" id="name" type="text" wire:model="name" placeholder="Type name here..."></x-jet-input>

        @error('name')

        <span class="text-xs font-bold text-red-600 font-italic">Please type name...</span>

        @enderror
    </div>

    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="position">
            Position
        </label>
        <x-jet-input class="w-full" id="position" type="text" wire:model="position" placeholder="Type position here..."></x-jet-input>

        @error('position')

        <span class="text-xs font-bold text-red-600 font-italic">Please type position...</span>

        @enderror
    </div>

    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="code">
            Code
        </label>
        <x-jet-input class="w-full" id="code" type="text" wire:model="code" placeholder="Type code here..."></x-jet-input>

        @error('code')

        <span class="text-xs font-bold text-red-600 font-italic">Please type Code...</span>

        @enderror
    </div>
    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="political_year">
            Political Year
        </label>
        <x-jet-input class="w-full" id="political_year" type="number" wire:model="political_year" placeholder="Type year here..."></x-jet-input>

        @error('political_year')

        <span class="text-xs font-bold text-red-600 font-italic">Please type Year...</span>

        @enderror
    </div>

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('openAddModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addSbmember" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
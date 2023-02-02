<x-jet-dialog-modal wire:model="openAddModal" maxWidth="2xl">
    <x-slot name="title">
        Classification
    </x-slot>

    <x-slot name="content">

        <x-jet-input class="w-full" type="text" wire:model="name" placeholder="Type name here..."></x-jet-input>

        @error('name')

        <span class="text-xs font-bold text-red-600 font-italic">Please type name...</span>

        @enderror

        <label class="block text-gray-700 text-sm font-bold mb-2" for="middlename">
            Category
        </label>

        <select wire:model="category_id"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

            <option value="">Select... </option>
            @foreach ($categories as $category )

            <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
        </select>

        @error('category_id')
        <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
        @enderror

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('openAddModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addClassification" wire:loading.attr="disabled">
            Submit
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
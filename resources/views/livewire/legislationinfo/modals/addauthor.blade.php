<x-jet-dialog-modal wire:model="showAddAuthorModal" maxWidth="2xl">
    <x-slot name="title">
        Legislation
    </x-slot>

    <x-slot name="content">


        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="sbmember_id">
                        SB Member
                    </label>


                    <select wire:model="sbmember_id"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

<option value="">Select... </option>
                        @foreach ($sbmembers as $sbmember )

                        <option value="{{$sbmember->id}}">{{$sbmember->name}}</option>

                        @endforeach
                    </select>

                    @error('sbmember_id')
                        <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
                    @enderror

                </div>
            </div>
        </div>


    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('showAddAuthorModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addAuthor" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>

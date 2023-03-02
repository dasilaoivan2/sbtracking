<x-jet-dialog-modal wire:model="othermatterEditModal" maxWidth="2xl">
    <x-slot name="title">
        Other Matter
    </x-slot>

    <x-slot name="content">

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="othermatter_desc">
                    Description
                    </label>
                    <textarea wire:model="othermatter_desc"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Type here..."></textarea>

                    @error('othermatter_desc')
                    <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>


        

       

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('othermatterEditModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addOthermatterInEdit" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
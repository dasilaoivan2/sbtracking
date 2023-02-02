<x-jet-dialog-modal wire:model="referenceEditModal" maxWidth="2xl">
    <x-slot name="title">
        Reference of Business
    </x-slot>

    <x-slot name="content">

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <textarea wire:model="title"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Type here..."></textarea>

                    @error('title')
                    <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>


        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="proponent">
                        Proponent
                    </label>


                    <select wire:model="proponent"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                        <option value="">Select... </option>
                        @foreach ($sbmembers as $sbmember )

                        <option value="{{$sbmember->name}}">{{$sbmember->name}}</option>

                        @endforeach
                    </select>

                    @error('proponent')
                    <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
                    @enderror

                </div>
            </div>
        </div>   


        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="referencefile">
                        Attachments
                    </label>

                    <input type="file" wire:model="referencefile">
                    <!-- <input type="file" wire:model="referencefile" multiple> -->

                    @error('referencefile') <span class="error">{{ $message }}</span> @enderror

                </div>
            </div>
        </div>

       

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('referenceEditModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addReferenceInEdit" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
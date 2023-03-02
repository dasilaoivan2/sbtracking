<x-jet-dialog-modal wire:model="showAddLegislationModal" maxWidth="2xl">
    <x-slot name="title">
        Add Legislation
    </x-slot>

    <x-slot name="content">

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="referencenumber">
                        Reference Number
                    </label>
                    <input wire:model="referencenumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Type here...">

                    @error('referencenumber')
                    <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="legislation_title">
                        Title
                    </label>
                    <input wire:model="legislation_title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Type here...">

                    @error('legislation_title')
                    <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="legislation_description">
                        Description
                    </label>
                    <input wire:model="legislation_description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Type here...">

                    @error('legislation_description')
                    <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="legislationtype_id">
                        Legislation Type
                    </label>


                    <select wire:model="legislationtype_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                        <option value="">Select... </option>
                        @foreach ($legislationtypes as $legislationtype )

                        <option value="{{$legislationtype->id}}">{{$legislationtype->name}}</option>

                        @endforeach
                    </select>

                    @error('legislationtype_id')
                    <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
                    @enderror

                </div>
            </div>
        </div>
        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dateenacted">
                        Date Enacted
                    </label>
                    <input wire:model="dateenacted" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date">

                    @error('dateenacted')
                    <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>
        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="sbmember_id">
                        Proponent
                    </label>


                    <select wire:model="sbmember_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

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


        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="legislationfilenames">
                        Legislation File Description
                    </label>



                    <input type="file" id="legislationfilenames" wire:model="legislationfilenames" multiple>

                    @error('legislationfilenames.*') <span class="error">{{ $message }}</span> @enderror

                </div>
            </div>
        </div>



        

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('showAddLegislationModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addLegislation" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
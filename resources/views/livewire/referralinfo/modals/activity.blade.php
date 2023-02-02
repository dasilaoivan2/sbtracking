<x-jet-dialog-modal wire:model="showActivityModal" maxWidth="2xl">
    <x-slot name="title">
        Add Activity
    </x-slot>

    <x-slot name="content">

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="activitydescription">
                        Description
                    </label>
                    <input wire:model="activitydescription"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Type here...">

                    @error('activitydescription')
                        <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="activitysubject">
                        Subject
                    </label>
                    <input wire:model="activitysubject"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Type here...">

                    @error('activitysubject')
                        <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>



        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="activitytype_id">
                        Activity Type
                    </label>


                    <select wire:model="activitytype_id"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

<option value="">Select... </option>
                        @foreach ($activitytypes as $activitytype )

                        <option value="{{$activitytype->id}}">{{$activitytype->name}}</option>

                        @endforeach
                    </select>

                    @error('activitytype_id')
                        <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dateofactivity">
                        Date
                    </label>
                    <input wire:model="dateofactivity"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="date">

                    @error('dateofactivity')
                        <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>



    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('showActivityModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addActivity" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>

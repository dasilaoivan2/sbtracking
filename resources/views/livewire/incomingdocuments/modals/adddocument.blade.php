<x-jet-dialog-modal wire:model="openAddModal" maxWidth="2xl">
    <x-slot name="title">
        Incoming Document
    </x-slot>

    <x-slot name="content">


        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="type_id">
                        Type
                    </label>


                    <select wire:model="type_id"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                        <option value="">Select... </option>
                        @foreach ($types as $type )

                        <option value="{{$type->id}}">{{$type->name}}</option>

                        @endforeach
                    </select>

                    @error('type_id')
                    <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea wire:model="description"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Type here..."></textarea>

                    @error('description')
                    <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>


        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
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

                </div>
            </div>
        </div>



        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="classifications">
                        Classifications
                    </label>

                    @php
                    $count=0;
                    @endphp

                    @if(count($classArray)>0)


                    @foreach ($classArray as $class)
                    {{ $class['name'] }}
                    <button class="bg-red-300 rounded px-1" wire:click="removeArray({{ $count++ }})"><i class="fa-solid fa-minus"></i></button></button>
                    @endforeach

                    @endif

                    <hr>


                    @foreach ($classifications as $classification )
                    {{ $classification->name }}
                    <button wire:click="addClassificationArray({{ $classification->id }})"
                        class="rounded px-1 mx-4 bg-green-300 mb-5">
                        <i class="fa-solid fa-plus"></i></button>
                    @endforeach

                </div>
            </div>
        </div>


        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="classifications">
                        Attachments
                    </label>

                    <input type="file" wire:model="photos" multiple>

                    @error('photos.*') <span class="error">{{ $message }}</span> @enderror

                </div>
            </div>
        </div>

       

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('openAddModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addIncomingDocument" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
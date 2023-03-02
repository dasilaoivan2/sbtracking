<x-jet-dialog-modal wire:model="openEditModal" maxWidth="7xl">
    <x-slot name="title">
        Order of Business
    </x-slot>

    <x-slot name="content">

        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
            <div class="block pb-5">
                <div class="w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                            Description
                        </label>
                        <input wire:model="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Type here...">

                        @error('description')
                        <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                        @enderror

                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="block pb-5">
                <div class="w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="number_order_sb">
                            Sangguniang Bayan #
                        </label>
                        <input wire:model="number_order_sb" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="Type here...">

                        @error('number_order_sb')
                        <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                        @enderror

                    </div>
                </div>
            </div>

            <div class="block pb-5">
                <div class="w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="number_order_session">
                            # of Session
                        </label>
                        <input wire:model="number_order_session" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="Type here...">

                        @error('number_order_session')
                        <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                        @enderror

                    </div>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="block pb-5">
                <div class="w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="session_date">
                            Session Date
                        </label>
                        <input wire:model="session_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date">

                        @error('session_date')
                        <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                        @enderror

                    </div>
                </div>
            </div>


            <div class="block pb-5">
                <div class="w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="ordercategory_id">
                            Order Business Category
                        </label>


                        <select id="ordercategory_id" wire:model="ordercategory_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                            <option value="">Select... </option>
                            @foreach ($ordercategories as $category )

                            <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach
                        </select>

                        @error('ordercategory_id')
                        <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
                        @enderror

                    </div>
                </div>
            </div>

            <div class="block pb-5">
                <div class="w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="invocation">
                            Invocation
                        </label>


                        <select id="invocation" wire:model="invocation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                            <option value="">Select... </option>
                            @foreach ($sbmembers as $sbmember )

                            <option value="{{$sbmember->name}}">{{$sbmember->name}}</option>

                            @endforeach
                        </select>

                        @error('sbmember')
                        <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
                        @enderror

                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
            <div class="block pb-5">
                <div class="w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="reading">
                            Reading and Adoption of the Minutes
                        </label>
                        <input wire:model="reading" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Type here...">

                        @error('reading')
                        <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                        @enderror

                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="reference">
                Reference of Business <x-jet-button wire:click="showEditModalRef"> <span class="mr-2"><i class="fa fa-plus fa-lg"></i></span> Add </x-jet-button>
            </label>

            <div id="reference">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <div class="block pb-5">
                        <div class="w-full">
                            <div class="mb-4">
                                <table class="table-auto w-full text-center">
                                    <thead>
                                        <tr>
                                            <th class="border p-1">#</th>
                                            <th class="border p-1">Reference Title</th>
                                            <th class="border p-1">Proponent</th>
                                            <th class="border p-1">Action</th>
                                            <!-- <th class="border p-1">Select</th> -->
                                        </tr>
                                    </thead>
                                    @php
                                    $count = 1;
                                    @endphp
                                    <tbody>
                                        @if($references)
                                        @foreach($references as $reference)
                                        <tr>
                                            <td class="border p-1">{{ $count++ }}</td>
                                            <td class="border p-1">{{ $reference->title }}</td>
                                            <td class="border p-1">{{ $reference->proponent }}</td>
                                            <td class="border p-1">
                                                <x-jet-button wire:click.prevent="deleteReferenceEdit({{$reference->id}})"> Delete </x-jet-button>
                                            </td>

                                        </tr>
                                        @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <hr>
        <br>

        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
            <div class="mb-4 py-4 px-4" style="background-color: lightblue;">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="com">
                    ADD COMMUNICATION / BRGY. RESOLUTION / PROPOSED ORDINANCE
                </label>
                <div id="com">
                    <div class="block pb-5">
                        <div class="m-0">
                            <input type="text" wire:model="searchIncDoc" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type here to search...">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                        <div class="block pb-5">
                            <div class="w-full">
                                <div class="mb-4">
                                    <table class="table-auto w-full text-center">
                                        <thead>
                                            <tr>
                                                <th class="border p-1">#</th>
                                                <th class="border p-1">Title</th>
                                                <th class="border p-1">Description</th>
                                                <th class="border p-1">Category</th>
                                                <th class="border p-1">Date Created</th>
                                                <!-- <th class="border p-1">Select</th> -->
                                            </tr>
                                        </thead>
                                        @php
                                        $count = 1;
                                        @endphp
                                        <tbody>
                                            @foreach($incomingdocuments as $key => $incomingdocument)
                                            <tr>
                                                <td class="border p-1">{{ $count++ }}</td>
                                                <td class="border p-1">{{ $incomingdocument->type->name }}<span class="ml-2"><input type="checkbox" class="font-bolder rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="category" wire:model="incdocArray.{{$incomingdocument->id}}" wire:click.debounce="addIncDocArray({{$incomingdocument->id}}, {{$key}})"></span></td>
                                                <td class="border p-1">{{ $incomingdocument->description }}</td>
                                                <td class="border p-1">{{ $incomingdocument->category->name }}</td>
                                                <td class="border p-1">{{ $incomingdocument->created_at->format('F d, Y') }}</td>

                                                <!-- <td class="border p-1">
                                        <input type="checkbox" class="font-bolder rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="category" wire:model="incdocArray.{{$incomingdocument->id}}" wire:click.debounce="addIncDocArray({{$incomingdocument->id}}, {{$key}})">
                                    </td> -->
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                {{$incomingdocuments->links()}}

                            </div>
                            @if($incomingdocument_id == NULL)
                            <span class="text-xs font-bold text-red-600 font-italic">Please select from Incoming Documents</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 py-4 px-4" style="background-color: lightblue;">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="report">
                    ADD COMMITTEE REPORT
                </label>
                <div id="report">
                    <div class="block pb-5">
                        <div class="m-0">
                            <input type="text" wire:model="searchIncActivity" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type here to search...">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                        <div class="block pb-5">
                            <div class="w-full">
                                <div class="mb-4">
                                    <table class="table-auto w-full text-center">
                                        <thead>
                                            <tr>
                                                <th class="border p-1">#</th>
                                                <th class="border p-1">Description</th>
                                                <th class="border p-1">Type</th>
                                                <th class="border p-1">Date</th>
                                                <th class="border p-1">Referral</th>
                                                <!-- <th class="border p-1">Select</th> -->
                                            </tr>
                                        </thead>
                                        @php
                                        $count = 1;
                                        @endphp
                                        <tbody>
                                            @foreach($activities as $key => $activity)
                                            <tr>
                                                <td class="border p-1">{{ $count++ }}</td>
                                                <td class="border p-1">{{ $activity->description }}<span class="ml-2"><input type="checkbox" class="font-bolder rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="category" wire:model="activityArray.{{$activity->id}}" wire:click.debounce="addActivityArray({{$activity->id}}, {{$key}})"></span></td>
                                                <td class="border p-1">{{ $activity->activitytype->name }}</td>
                                                <td class="border p-1">{{ $activity->dateofactivity }}</td>
                                                <td class="border p-1">{{ $activity->referral->referraltype->name }}</td>


                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                {{$activities->links()}}

                            </div>
                            @if($activity_id == NULL)
                            <span class="text-xs font-bold text-red-600 font-italic">Please select from Incoming Documents</span>
                            @endif
                        </div>

                    </div>
                    <!-- {{print_r($incomingdocument_id)}}
                <br>
        {{print_r($incdocArray)}} -->
                </div>

            </div>

            <hr>
            <br>

            <div class="mb-4 py-4 px-4" style="background-color: lightblue;">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="com">
                    ADD UNFINISHED BUSINESS
                </label>
                <div id="com">
                    <div class="block pb-5">
                        <div class="m-0">
                            <input type="text" wire:model="searchIncDocUnFin" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type here to search...">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                        <div class="block pb-5">
                            <div class="w-full">
                                <div class="mb-4">
                                    <table class="table-auto w-full text-center">
                                        <thead>
                                            <tr>
                                                <th class="border p-1">#</th>
                                                <th class="border p-1">Title</th>
                                                <th class="border p-1">Description</th>
                                                <th class="border p-1">Category</th>
                                                <th class="border p-1">Date Created</th>
                                                <!-- <th class="border p-1">Select</th> -->
                                            </tr>
                                        </thead>
                                        @php
                                        $count = 1;
                                        @endphp
                                        <tbody>
                                            @foreach($unfinincomingdocuments as $key => $incomingdocument)
                                            <tr>
                                                <td class="border p-1">{{ $count++ }}</td>
                                                <td class="border p-1">{{ $incomingdocument->type->name }}<span class="ml-2"><input type="checkbox" class="font-bolder rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="category" wire:model="incdocUnfinArray.{{$incomingdocument->id}}" wire:click.debounce="addIncDocUnfinArray({{$incomingdocument->id}}, {{$key}})"></span></td>
                                                <td class="border p-1">{{ $incomingdocument->description }}</td>
                                                <td class="border p-1">{{ $incomingdocument->category->name }}</td>
                                                <td class="border p-1">{{ $incomingdocument->created_at->format('F d, Y') }}</td>

                                                <!-- <td class="border p-1">
                                        <input type="checkbox" class="font-bolder rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="category" wire:model="incdocArray.{{$incomingdocument->id}}" wire:click.debounce="addIncDocArray({{$incomingdocument->id}}, {{$key}})">
                                    </td> -->
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                {{$unfinincomingdocuments->links()}}

                            </div>
                            @if($unfinincomingdocument_id == NULL)
                            <span class="text-xs font-bold text-red-600 font-italic">Please select from Incoming Documents</span>
                            @endif
                        </div>

                    </div>
                    <!-- {{print_r($incomingdocument_id)}}
                <br>
        {{print_r($incdocArray)}} -->
                </div>

            </div>
            <hr>
            <br>


            <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="othermatters">
                Other Matters <x-jet-button wire:click="showEditModalMatter"> <span class="mr-2"><i class="fa fa-plus fa-lg"></i></span> Add </x-jet-button>
            </label>

            <div id="othermatters">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <div class="block pb-5">
                        <div class="w-full">
                            <div class="mb-4">
                                <table class="table-auto w-full text-center">
                                    <thead>
                                        <tr>
                                            <th class="border p-1">#</th>
                                            <th class="border p-1">Description</th>
                                            <th class="border p-1">Action</th>
                                            <!-- <th class="border p-1">Select</th> -->
                                        </tr>
                                    </thead>
                                    @php
                                    $count = 1;
                                    @endphp
                                    <tbody>
                                        @if($othermatters)
                                        @foreach($othermatters as $othermatter)
                                        <tr>
                                            <td class="border p-1">{{ $count++ }}</td>
                                            <td class="border p-1">{{ $othermatter->description }}</td>
                                            <td class="border p-1"><x-jet-button wire:click.prevent="deleteMatterEdit({{$othermatter->id}})"> Delete </x-jet-button></td>

                                        </tr>
                                        @endforeach
                                        @endif


                                    </tbody>
                                </table>
                            </div>
                            

                        </div>
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


                <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
                    <x-jet-button class="ml-2" wire:click.prevent="addPhoto" wire:loading.attr="disabled">
                        Add Photo
                    </x-jet-button>
                </div>




                <div class="block pb-5">
                    @if($orderbusinessfiles != NULL)
                    <div class="grid grid-cols-1 md:grid-cols-6 gap-2">
                        @foreach($orderbusinessfiles as $orderbusfile)
                        <div style="position:relative; width:'mainimagewidth'">
                            <img src="{{asset('storage/orderbusiness/'.$orderbusfile->filename)}}" />
                            <span style="position:absolute; top:0; right:0;"><button wire:click.prevent="deletePhoto({{$orderbusfile->id}})" class="btn btn-sm bg-red-500 hover:bg-red-700 text-white border-red-700 text-xs font-bold py-1 px-1 rounded">
                                    <i class="fas fa-times-circle fa-lg"></i>
                                </button></span>
                        </div>

                        @endforeach
                    </div>






                    @endif


                </div>
            </div>

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="closeEditModal" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
            Update
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
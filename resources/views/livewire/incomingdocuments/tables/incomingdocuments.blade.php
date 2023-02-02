<table class="table-auto w-full text-center">
    <thead>
        <tr>
            <th class="border p-1">#</th>
            <th class="border p-1">Type</th>
            <th class="border p-1">Description</th>
            <th class="border p-1">Date created</th>
            <th class="border p-1">Category</th>
            <th class="border p-1">Tags / Classification </th>
            <th class="border p-1">Files</th>
            <th class="border p-1">Referrals</th>
            <th class="border p-1">Refer</th>
            <th class="border p-1">Action</th>
        </tr>
    </thead>
    @php
        $count = 1;
    @endphp
    <tbody>
        @foreach ($incdocs as $incdoc)
            <tr>
                <td class="border p-1">{{ $count++ }}</td>
                <td class="border p-1">{{ $incdoc->type->name }}</td>
                <td class="border p-1">{{ $incdoc->description }}</td>
                <td class="border p-1">{{ $incdoc->created_at->format('F d, Y') }}</td>
                <td class="border p-1">{{ $incdoc->category->name }}</td>
                <td class="border p-1">
                    @foreach ($incdoc->docclassifications as $item)
                        

                    <a class="underline text-blue-600" href="{{ route('tags',['classification_id'=>$item->classification->id]) }}">    {{ $item->classification->name }} </a>

                        <button wire:click="deleteClassification({{ $item->id }})">
                            <span class="text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900"><i class="fa-solid fa-circle-xmark"></i></span>
                        </button>
                        
                    @endforeach
                </td>

                <td class="border p-1">

                    @foreach($incdoc->files as $file)
                    <a target="_blank" href="{{ asset('storage/incomingdocuments/'.$file->filename) }}"> 
                        <span class="underline text-blue-600 pl-10">{{ $file->filename }}</span>    
                    </a>

                    <button wire:click="deleteFile({{ $file->id }})">
                        <span class="text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900"><i class="fa-solid fa-circle-xmark mr-2"></i></span>
                    </button>


                    @endforeach
                    
                </td>
                <td class="border p-1">

                    
                    @foreach($incdoc->referrals as $referral)

                    <a class="underline text-blue-600" href="{{ route('referral',['referral_id'=>$referral->id]) }}">
                    {{ $referral->referraltype->name }} <br>
                    </a>

                    @endforeach

                </td>

                <td class="border p-1">
                    <x-jet-secondary-button wire:click="refer({{ $incdoc->id }})">
                        <span class="mr-2"><i class="fa fa-pencil"></i></span>Refer</x-jet-secondary-button>
                </td>
                <td class="border p-1">

                    <x-jet-button wire:click="edit({{ $incdoc->id }})">
                    <span class="mr-2"><i class="fa fa-pen-to-square"></i></span>Edit</x-jet-button>
                   
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="7">{{ $incdocs->links() }}</td>
        </tr>
    </tbody>
</table>
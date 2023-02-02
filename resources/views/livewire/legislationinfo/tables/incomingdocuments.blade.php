<table class="w-full">
    <thead>
        <tr>
   
            <th class="border p-1">Title</th>
            <th class="border p-1">Description</th>
            <th class="border p-1">Date created</th>
            <th class="border p-1">Category</th>
            <th class="border p-1">Tags / Classification </th>
            <th class="border p-1">Files</th>
            <!-- <th class="border p-1">Action</th> -->
        </tr>
    </thead>

    <tbody>

            <tr>
    
                <td class="border p-1 text-center">{{ $incdoc->title }}</td>
                <td class="border p-1 text-center">{{ $incdoc->description }}</td>
                <td class="border p-1 text-center">{{ $incdoc->created_at->format('F d, Y') }}</td>
                <td class="border p-1 text-center">{{ $incdoc->category->name }}</td>
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
                        <span class="text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900"><i class="fa-solid fa-circle-xmark"></i></span>
                    </button>


                    @endforeach
                    
                </td>
                
                <!-- <td class="border p-1">

                    <x-jet-button wire:click="edit({{ $incdoc->id }})">Edit</x-jet-button>
                   
                </td> -->
            </tr>
 

    </tbody>
</table>
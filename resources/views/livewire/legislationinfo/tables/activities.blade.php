<table class="w-full">
    <thead>
        <tr>
            <th class="border p-1">#</th>
            <th class="border p-1">Date</th>
            <th class="border p-1">Activity Type</th>
            <th class="border p-1">Description</th>
            <th class="border p-1">Files</th>
            <!-- <th class="border p-1">Action</th> -->
        </tr>
    </thead>
    <tbody>
        @php    
            $count=1;
        @endphp
        @foreach ($referral->activities as $activity)
        <tr>
            <td class="border p-1 text-center">{{ $count++ }}</td>
            <td class="border p-1 text-center">{{ date('F d, Y',strtotime($activity->dateofactivity)) }}</td>
            <td class="border p-1 text-center">{{ $activity->activitytype->name }}</td>
            <td class="border p-1 text-center">{{ $activity->description }}</td>
            <td class="border p-1">
                Files: <br>

                @php
                    $count=1;
                @endphp
                @foreach ($activity->files as $file)

                <a class="text-blue-600 hover:text-blue-800" href="{{ asset('storage/activityfiles/'.$file->filename) }}"> {{ $count++  }}. {{ $file->description }} </a>
                    
                @endforeach

                <!-- <hr> -->
                <!-- <x-jet-button class="bg-blue-500 hover:bg-blue-600" wire:click="addFiles({{ $activity->id }})">Upload</x-jet-button> -->
            </td>

            <!-- <td class="border p-1">
            
                <x-jet-button class="bg-blue-500 hover:bg-blue-600" wire:click="editActivity({{ $activity->id }})">Edit</x-jet-button>
                
            </td> -->
        </tr>
            
        @endforeach
        <tr></tr>
    </tbody>
</table>
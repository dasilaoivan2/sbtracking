<table class="w-full">
    <thead>
        <tr>
            <th class="border p-1">#</th>
            <th class="border p-1">Reference Number</th>
            <th class="border p-1">Title</th>
            <th class="border p-1">Description</th>
            <th class="border p-1">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $count = 1;
        @endphp
        @foreach ($legislations as $legislation)
            <tr>
                <td class="border p-1 text-center">{{ $count++ }}</td>
                <td class="border p-1 text-center">{{ $legislation->referencenumber }}</td>
                <td class="border p-1 text-center">{{ $legislation->title }}</td>
                <td class="border p-1 text-center">{{ $legislation->description }}</td>
                <td class="border p-1 text-center">
                    <a href="{{ route('legislation', ['legislation_id' => $legislation->id]) }}">
                        <x-jet-button class="bg-blue-500 hover:bg-blue-800"><span class="mr-2"><i class="fa fa-film fa-lg"></i></span>View</x-jet-button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>




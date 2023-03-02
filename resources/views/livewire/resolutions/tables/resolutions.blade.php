<table class="w-full">
    <thead>
        <tr>
            <th class="border p-1">#</th>
            <th class="border p-1">Reference Number</th>
            <th class="border p-1">Date of Approval</th>
            <th class="border p-1">Title</th>
            <th class="border p-1">Proponent</th>
            <th class="border p-1">Sponsor/Author</th>
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
                <td class="border p-1 text-center">{{ Carbon\Carbon::parse($legislation->dateenacted)->format('M d, Y') }}</td>
                <td class="border p-1 text-center">{{ $legislation->title }}</td>
                <td class="border p-1 text-center">
                    @if($legislation->sbmember_id != 0)
                    {{ $legislation->sbmember->name }}
                    @endif
                </td>
                <td class="border p-1 text-center">
                  

                    @foreach($legislation->authors as $author)
                        @if($legislation->authors->count() >1)
                        {{ $author->sbmember->code }}<br>
                        @else
                        {{ $author->sbmember->code }}

                    @endif

                    @endforeach
                </td>
                <td class="border p-1 text-center">
                    <a href="{{ route('legislation', ['legislation_id' => $legislation->id]) }}">
                        <x-jet-button class="bg-blue-500 hover:bg-blue-800"><span class="mr-2"><i class="fa fa-film fa-lg"></i></span>View</x-jet-button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>




<div>
    <table class="w-full">
        <thead>
            <tr>
                <th class="border p-1">#</th>
                <th class="border p-1">Title</th>
                <th class="border p-1">Description</th>
                <th class="border p-1">Legislation Type</th>
                <th class="border p-1">Author</th>
                <th class="border p-1">Co-Author</th>

                <th class="border p-1">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $count = 1;
            @endphp
            @foreach ($referral->legislations as $legislation)
                <tr>
                    <td class="border p-1 text-center">{{ $count++ }}</td>
                    <td class="border p-1 text-center">
                        {{ $legislation->title }}
                       
                    </td>
                    <td class="border p-1 text-center">{{ $legislation->description }}</td>
                    <td class="border p-1 text-center">{{ $legislation->legislationtype->name }}</td>
                    <td class="border p-1 text-center">

                        @foreach ($legislation->authors as $author)
                            {{ $author->sbmember->name }} <br>
                        @endforeach

                    </td>
                    <td class="border p-1 text-center">
                        @foreach ($legislation->coauthors as $author)
                        {{ $author->sbmember->name }} <br>
                        @endforeach
     
                    </td>
                    <td class="border p-1 text-center">
                        <a href="{{ route('legislation', ['legislation_id' => $legislation->id]) }}">
                            <x-jet-button class="bg-blue-500 hover:bg-blue-800"><span class="mr-2"><i class="fa fa-film fa-lg"></i></span>View</x-jet-button>
                        </a>
                        <x-jet-button wire:click="editLegislation({{ $legislation->id }})"><span class="mr-2"><i class="fa fa-pen-to-square fa-lg"></i></span>Edit</x-jet-button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<table class="border p-1 w-1/2">
    <thead>
        <tr>
            <th class="border p-1">#</th>
            <th class="border p-1">Name</th>
            <th class="border p-1">Category</th>
            <th class="border p-1">Action</th>
        </tr>
    </thead>
    @php
        $count=1;
    @endphp
    <tbody>
        @foreach ($classifications as $classification)
        <tr>
            <td class="border p-1">{{ $count++ }}</td>
            <td class="border p-1">{{ $classification->name }}</td>
            <td class="border p-1">{{ $classification->category->name }}</td>
            <td class="border p-1">
                <x-jet-button wire:click="edit({{ $classification->id }})">Edit</x-jet-button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<table class="table-auto w-full text-center">
    <thead>
        <tr class="bg-gray-100">
            <th class="px-4 py-2 w-20">#</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Category</th>
            <th width="230px" class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $temp = 0; ?>

        @foreach($classifications as $classification)
        <tr>
            <?php $temp++; ?>
            <td class="border px-4 py-2">{{$temp}}</td>
            <td class="border px-4 py-2">{{ $classification->name }}</td>
            <td class="border px-4 py-2">{{ $classification->category->name }}</td>
            <td class="border">
                <x-jet-button class="m-2" wire:click="edit({{$classification->id}})">
                    {{ __('Edit') }}
                </x-jet-button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<table class="w-full">
    <thead>
        <tr>
            <th class="border p-1">Date</th>
            <th class="border p-1">Description</th>
            <th class="border p-1">Referral Type</th>
            <th class="border p-1">Incoming Document</th>
            <th class="border p-1">Action</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td class="border p-1 text-center">{{ $referral->created_at->format('F d, Y') }}</td>
                <td class="border p-1 text-center">{{ $referral->description }}</td>
                <td class="border p-1 text-center">{{ $referral->referraltype->name }}</td>
                <td class="border p-1">
                    {{ $referral->incomingdocument->title }}
                    <hr>
                    FILES: <br>

                    @foreach ($referral->incomingdocument->files as $file)
                        <a target="_blank" href="{{ asset('storage/incomingdocuments/' . $file->filename) }}">
                            <span class="underline text-blue-600 pl-10">{{ $file->filename }}</span>
                        </a>
                    @endforeach

                </td>
                <td class="border p-1 text-center">

                    <a href="{{ route('referral',['referral_id'=>$referral->id]) }}">
                        <x-jet-button class="bg-blue-500 hover:bg-blue-800"><span class="mr-2"><i class="fa fa-film fa-lg"></i></span>View</x-jet-button>
                    </a>
                </td>
            </tr>
   
    </tbody>
</table>

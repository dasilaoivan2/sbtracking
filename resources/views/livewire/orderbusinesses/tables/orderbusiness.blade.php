<table class="table-auto w-full text-center">
    <thead>
        <tr>
            <th class="border p-1">#</th>
            <th class="border p-1">Description</th>
            <th class="border p-1">Sangguniang Bayan #</th>
            <th class="border p-1">Session #</th>
            <th class="border p-1">Session Date</th>
            <th class="border p-1">Order Business Category</th>
            <th class="border p-1">Incoming Documents</th>
            <th class="border p-1">Action</th>
        </tr>
    </thead>
    @php
    $numberFormatter = new NumberFormatter('en_US', NumberFormatter::ORDINAL);
    
    $count = 1;
    @endphp
    <tbody>
        @foreach ($orderbusinesses as $orderbusiness)
        <tr>
            <td class="border p-1">{{ $count++ }}</td>
            <td class="border p-1">{{ $orderbusiness->description }}</td>
            <td class="border p-1">{{ $numberFormatter->format($orderbusiness->number_order_sb) }}</td>
            <td class="border p-1">{{ $numberFormatter->format($orderbusiness->number_order_session) }}</td>
            <td class="border p-1">{{ Carbon\Carbon::parse($orderbusiness->session_date)->format('F d, Y') }}</td>
            <td class="border p-1">{{ $orderbusiness->ordercategory->name }}</td>
            <td class="border p-1">
                @php
                $no = 1
                @endphp

                @foreach( $orderbusiness->incomingdocuments as $incdoc)
                {{$no++}}. {{$incdoc->type->name}} <br>
                @endforeach
            </td>

            <td class="border p-1">

                <x-jet-button wire:click="edit({{ $orderbusiness->id }})">
                    <span class="mr-2"><i class="fa fa-pen-to-square"></i></span>Edit
                </x-jet-button>

                <x-jet-secondary-button><a target="_blank" href="{{route('orderbusiness.view', ['id' => $orderbusiness->id])}}">
                    <span class="mr-2"><i class="fa fa-binoculars"></i></span>View </a>
                </x-jet-secondary-button>

            </td>
        </tr>
        @endforeach
        
            
        
    </tbody>
</table>

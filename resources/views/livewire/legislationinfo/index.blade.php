<div class="p-12">

    <div class="block">
    <span class="font-bold text-2xl">{{ $legislation->legislationtype->name }} : {{ $legislation->title }}</span> <br>
    <span class="font-bold text-xl">{{ $legislation->description }}</span>
    </div>

    <div class="block mt-10">

        <span class="font-bold text-lg">Author: </span> <button class="bg-blue-300 p-1 rounded" wire:click="openAddAuthorModal('1')"><i class="fa fa-user-plus"></i></button>

        <div class="block ml-6 mb-4">

            <ul>
                @foreach ($legislation->authors as $author)
                <li>{{ $author->sbmember->name }} <button wire:click="deleteAuthor({{ $author->id }})" class="rounded p-1 text-xs font-bold bg-orange-300 hover:bg-orange-800"><i style="color: red;" class="fa fa-circle-xmark fa-lg"></i></button></li>
                @endforeach
            </ul>

        </div>

        <span class="font-bold text-lg">Co-Author: </span>

        <button class="bg-blue-300 p-1 rounded" wire:click="openAddAuthorModal('2')"><i class="fa fa-user-plus"></i></button>


        <div class="block ml-6 mb-6">

            <ul>
                @foreach ($legislation->coauthors as $coauthor)
                <li>{{ $coauthor->sbmember->name }} <button wire:click="deleteCoAuthor({{ $coauthor->id }})" class="rounded p-1 text-xs font-bold bg-orange-300 hover:bg-orange-800"><i style="color: red;" class="fa fa-circle-xmark fa-lg"></i> </button></li>
                @endforeach
            </ul>

        </div>
    </div>
    <div class="block mt-10">
    <span class="font-bold text-xl">FILES:</span>
    <div>
        @foreach($legislation->legislationfiles as $file)
        
        <a href="{{asset('storage/legislationfiles/'.$file->filename)}}" target="_blank">
                        <x-jet-button class="mr-2 bg-green-500 hover:bg-green-800"><span class="mr-2"><i class="fa fa-file fa-lg"></i></span>{{$file->filename}}</x-jet-button>
                    </a>
            
      
        @endforeach
        </div>
    </div>

    <div class="block pt-10 mb-4">
        <span class="font-bold text-2xl">REFERRALS</span>
        <hr>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="pl-10 mb-6">

                @include('livewire.legislationinfo.tables.referral',['referral'=>$legislation->referral])

            </div>

            <div class="pl-10">
                FILES <br>
                {{ $legislation->referral->files }}
            </div>
        </div>

    </div>

    <div class="block mb-4">
        <span class="font-bold text-2xl">ACTIVITIES</span>
        <hr>
        <div class="pl-10">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">


                @include('livewire.legislationinfo.tables.activities',['referral'=>$legislation->referral])

            </div>
        </div>
        <div class="pl-10">

        </div>
    </div>


    <div class="block">

        <span class="font-bold text-2xl">INCOMING DOCUMENTS</span>
        <hr>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="pl-10 mb-6">


                @include('livewire.legislationinfo.tables.incomingdocuments',['incdoc'=>$legislation->referral->incomingdocument])

            </div>
            <div class="pl-10">

                FILES
                <hr>
                {{ $legislation->referral->incomingdocument->files }}
            </div>
        </div>
    </div>

    @include('livewire.legislationinfo.modals.addauthor')

</div>
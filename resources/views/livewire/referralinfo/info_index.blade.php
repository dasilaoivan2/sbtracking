<div class="p-12">
    <div class="block">
        <span class="font-bold text-2xl"> {{ $referral->incomingdocument->title }}</span>

        @foreach ($referral->incomingdocument->files as $file)
        <a target="_blank" href="{{ asset('storage/incomingdocuments/' . $file->filename) }}">
            <span class="underline text-blue-600 pl-10">{{ $file->filename }}</span>
        </a>
        @endforeach

        <br>
        <span class="font-bold"> {{ $referral->incomingdocument->description }}</span> <br>
        <span class="font-bold text-2xl"> {{ $referral->description }}</span> <br>
        <span class="font-bold text-xl"> {{ $referral->referraltype->name }}</span>

        @include('livewire.includes.messages')

    </div>

    <div class="block">

        <x-jet-button wire:click="openActivityModal" class="mb-2"><span class="mr-2"><i class="fa fa-plus fa-lg"></i></span>Add Activity</x-jet-button>


        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 mb-4">
            @include('livewire.referralinfo.tables.activities')
        </div>

        <div class="block font-bold text-2xl pt-10 mb-4">LEGISLATIONS
            <x-jet-button wire:click="openAddLegislationModal"><span class="mr-2"><i class="fa fa-plus fa-lg"></i></span>
                Add Legislation
            </x-jet-button>
        </div>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @include('livewire.referralinfo.tables.legislations')
        </div>
        

    </div>

    @include('livewire.referralinfo.modals.activity')
    @include('livewire.referralinfo.modals.addfile')
    @include('livewire.referralinfo.modals.addLegislationModal')
    @include('livewire.referralinfo.modals.editLegislationModal')

</div>
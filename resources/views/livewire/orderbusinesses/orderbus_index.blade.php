<div class="p-12">
    <div class="block">
        <span class="font-bold text-2xl"> ORDER OF BUSINESS </span>
        <x-jet-button wire:click="showAddModal"> <span class="mr-2"><i class="fa fa-plus fa-lg"></i></span> Add </x-jet-button>

        @include('livewire.includes.messages')

        <div class="m-6">
            <input type="text" wire:model="searchToken" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type here to search...">
        </div>


    </div>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <div class="block">

            @include('livewire.orderbusinesses.tables.orderbusiness')

        </div>
        {{ $orderbusinesses->links() }}
    </div>

    
    @include('livewire.orderbusinesses.modals.addorderbus')
    @include('livewire.orderbusinesses.modals.addothermatter')
    @include('livewire.orderbusinesses.modals.reference')
    @include('livewire.orderbusinesses.modals.editorderbus')
    @include('livewire.orderbusinesses.modals.editreference')
    @include('livewire.orderbusinesses.modals.editothermatter')
    
    


</div>

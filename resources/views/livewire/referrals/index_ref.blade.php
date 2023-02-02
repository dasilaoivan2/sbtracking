<div class="p-12">
    <div class="block">
        <span class="font-bold text-2xl"> REFERRALS </span>


        @include('livewire.includes.messages')

        <div class="m-6">
            <input type="text" wire:model="searchToken" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type here to search...">
        </div>


    </div>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <div class="block">

            @include('livewire.referrals.tables.referrals')

        </div>
        <br>
        {{$referrals->links()}}
    </div>



</div>
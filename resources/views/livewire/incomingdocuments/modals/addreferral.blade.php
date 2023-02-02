<x-jet-dialog-modal wire:model="showReferralModal" maxWidth="2xl">
    <x-slot name="title">
        Referral
    </x-slot>

    <x-slot name="content">

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="referraltype_id">
                        Referral Type
                    </label>


                    <select wire:model="referraltype_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                        <option value="">Select... </option>
                        @foreach ($referraltypes as $referraltype )

                        <option value="{{$referraltype->id}}">{{$referraltype->name}}</option>

                        @endforeach
                    </select>

                    @error('referraltype_id')
                    <span class="text-xs font-bold text-red-600 font-italic">Please select field.</span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="block pb-5">
            <div class="w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="rtdescription">
                        Description
                    </label>
                    <input wire:model="rtdescription" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Type here...">

                    @error('rtdescription')
                    <span class="text-xs font-bold text-red-600 font-italic">This field must not be blank.</span>
                    @enderror

                </div>
            </div>
        </div>

        






    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('showReferralModal')" wire:loading.attr="disabled">
            Close
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="addReferral" wire:loading.attr="disabled">
            Add
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
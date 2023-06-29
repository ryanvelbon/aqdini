@section('title', 'Set up your profile')

<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
    <div class="mx-auto max-w-3xl">
        <form wire:submit.prevent="selectAccountType">
            @error('accountType')
                <div class="bg-red-100 p-4 mt-2">{{ $message }}</div>
            @enderror

            <h2 class="text-2xl font-bold">Join as a client or contractor</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 space-y-6 md:space-y-0 md:space-x-2 py-8">
                <div class="flex items-center pl-4 border border-black rounded-xl">
                    <input wire:model.lazy="accountType" id="bordered-radio-1" type="radio" value="client" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="bordered-radio-1" class="px-2 w-full py-8 ml-2 text-md md:text-lg font-medium text-gray-900 dark:text-gray-300">I'm a client, in need of a service</label>
                </div>
                <div class="flex items-center pl-4 border border-black rounded-xl">
                    <input wire:model.lazy="accountType" checked id="bordered-radio-2" type="radio" value="contractor" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="bordered-radio-2" class="px-2 w-full py-8 ml-2 text-md md:text-lg font-medium text-gray-900 dark:text-gray-300">I'm a contractor, offering a service</label>
                </div>
            </div>

            <button type="submit" class="w-full md:w-auto md:rounded-xl bg-black hover:bg-gray-700 text-white py-3 px-6">
                Create Profile
            </button>
        </form>
    </div>
</div>

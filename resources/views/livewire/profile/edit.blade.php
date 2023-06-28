@section('title', 'Edit your profile')

<div class="w-full max-w-2xl mx-auto">
    <form wire:submit.prevent="update" class="bg-white shadow-md rounded px-8 pt-6 pb-8">
        @if (session()->has('message'))
            <div class="bg-green-200 text-green-700 font-semibold p-5 m-1">{{ session('message') }}</div>
        @endif
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 py-4">

            <!-- First Name -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">
                    First Name
                </label>
                <input wire:model="first_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="first_name" type="text">
                @error('first_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Last Name -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">
                    Last Name
                </label>
                <input wire:model="last_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="last_name" type="text">
                @error('last_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Craft -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="craft">
                    Craft
                </label>
                <select wire:model="craft_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="craft">
                    <option value="">Select a craft</option>
                    @foreach($crafts as $craft)
                        <option value="{{ $craft->id }}">{{ $craft->name }}</option>
                    @endforeach
                </select>
                @error('craft_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Locality -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="locality">
                    Locality
                </label>
                <select wire:model="locality_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="locality">
                    <option value="">Select a locality</option>
                    @foreach($localities as $locality)
                        <option value="{{ $locality->id }}">{{ $locality->name }}</option>
                    @endforeach
                </select>
                @error('locality_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                    Phone
                </label>
                <input wire:model="phone" id="phone" type="tel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>


            <!-- Bio -->
            <div class="sm:col-span-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bio">
                    Bio
                </label>
                <textarea wire:model="bio" id="bio" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                @error('bio') <span>{{ $message }}</span> @enderror
            </div>

        </div>

        <div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Save
            </button>
        </div>
    </form>
</div>

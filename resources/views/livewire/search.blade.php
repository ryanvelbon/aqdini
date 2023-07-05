<form action="{{ route('profiles.search') }}" method="GET">
<div
    x-data="{
        selectedCraft: '',
        selectedLocality: '',
        showCraftOptions: false,
    }"
    class="flex bg-test-5 w-full h-12"
>

    <div class="px-5 bg-test-6 h-full flex items-center">
        <i class="fa-solid fa-location-dot fa-lg mr-1"></i>
        <span>Mellieha</span>
    </div>

    <div class="bg-test-1 grow h-full">
        <div class="relative h-full" @click.away="showCraftOptions = false">
            <input
                wire:model="craftSearch"
                id="craftCombobox"
                type="text"
                placeholder="What service do you need today?"
                x-on:focus="showCraftOptions = true"
                class="w-full h-full text-sm lg:text-base border-0"
                role="combobox"
                aria-controls="options"
                aria-expanded="false"
                autocomplete="off"
                spellcheck="false"
                required
            >

            @if($crafts->count() > 0)
            <ul
                x-show="showCraftOptions"
                class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                id="options"
                role="listbox"
            >

                <!--
                    *PENDING*: Combobox option, manage highlight styles based on keyboard navigation
                -->
                @foreach($crafts as $craft)
                <li
                    x-data="{ highlighted: false }"
                    x-on:click="
                        selectedCraft = '{{ $craft->id }}';
                        $wire.set('craftSearch', '{{ $craft->name }}');
                        showCraftOptions = false;
                    "
                    x-on:mouseenter="highlighted = true"
                    x-on:mouseleave="highlighted = false"
                    x-bind:class="{ 'bg-gray-200': highlighted }"
                    class="relative cursor-default select-none py-2 pl-3 pr-9"
                    role="option"
                    tabindex="-1"
                >
                    <div class="flex">
                        <span class="truncate">{{ $craft->name }}</span>
                        @if($craft->synonyms)
                            <span class="ml-2 truncate text-gray-500">{{ $craft->synonyms }}</span>
                        @endif
                    </div>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>

    <!-- hidden fields -->
    <input type="hidden" name="craft" x-bind:value="selectedCraft">
    <input type="hidden" name="locality" x-bind:value="selectedLocality">

    <button class="bg-blue-600 px-4 text-white h-full" type="submit">
        <i class="fa-solid fa-magnifying-glass fa-lg"></i>
    </button>
</div>
</form>
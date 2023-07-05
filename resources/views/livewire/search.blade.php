<form action="{{ route('profiles.search') }}" method="GET">
<div
    x-data="{
        selectedCraft: '',
        selectedLocality: '',
        showCraftOptions: false,
        showLocalityOptions: false,
    }"
    class="relative flex bg-test-5 w-full h-12"
>

    <div
        x-show="!showLocalityOptions"
        x-on:click="
            showLocalityOptions = true;
            setTimeout(() => {
                document.getElementById('localityInput').focus();
            }, 50);
        "
        class="w-48 px-5 bg-test-6 h-full flex items-center justify-center"
    >
        <i class="fa-solid fa-location-dot fa-lg mr-1"></i>
        <span>Mellieha</span>
    </div>

    <input
        wire:model="localitySearch"
        id="localityInput"
        x-show="showLocalityOptions"
        x-on:blur="showLocalityOptions = false"
        type="text"
        class="w-48"
        autocomplete="off"
        spellcheck="false"
    />

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

    @if($localities->count() > 0)
    <ul
        x-show="showLocalityOptions"
        class="absolute z-10 mt-12 w-72 rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
        role="listbox"
    >
        @foreach($localities as $locality)
        <li
            x-data="{ highlighted: false }"
            x-on:click="
                selectedLocality = '{{ $locality->id }}';
                $wire.set('localitySearch', '{{ $locality->name }}');
                showLocalityOptions = false;
            "
            x-on:mouseenter="highlighted = true"
            x-on:mouseleave="highlighted = false"
            x-bind:class="{ 'bg-gray-200': highlighted }"
            class="relative cursor-default select-none py-2 pl-3 pr-9"
            role="option"
            tabindex="-1"
        >
            <span class="truncate">{{ $locality->name }}</span>
        </li>
        @endforeach
    </ul>
    @endif
</div>
</form>
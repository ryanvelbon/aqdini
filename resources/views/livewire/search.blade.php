<div class="grid grid-cols-1 md:grid-cols-2">
    <div>
        <input wire:model="craftSearch" type="text" placeholder="X'ghandek bzonn?"/>
        <ul>
            @foreach($crafts as $craft)
                <li>{{ $craft->name }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <input wire:model="localitySearch" type="text" placeholder="Where?"/>
        <ul>
            @foreach($localities as $locality)
                <li>{{ $locality->name }}</li>
            @endforeach
        </ul>
    </div>
</div>
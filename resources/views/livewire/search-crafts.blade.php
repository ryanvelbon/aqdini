<div>
    <input wire:model="search" type="text" placeholder="Search crafts..."/>
    <ul>
        @foreach($crafts as $craft)
            <li>{{ $craft->name }}</li>
        @endforeach
    </ul>
</div>
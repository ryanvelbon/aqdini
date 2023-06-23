@extends('layouts.app')

@section('content')
<div class="py-12 flex justify-center">
    <h2 class="text-4xl text-gray-800 font-bold">{{ $craft->name }}s in {{ $locality->name }}</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($profiles as $profile)
        <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
            <a href="/profiles/{{ $profile->id }}" class="w-full block h-full">
                <img alt="profile image" src="{{ $profile->profile_pic }}" class="max-h-40 w-full object-cover"/>
                <div class="bg-white dark:bg-gray-800 w-full p-4">
                    <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                        {{ $profile->first_name }} {{ $profile->last_name }}
                    </p>
                    <p>
                        <span class="text-gray-500 dark:text-gray-300 font-light text-md">
                            {{ $profile->craft->name }}
                        </span>
                        <span class="text-xs uppercase text-gray-400 ml-2">
                            <i class="fa-regular fa-location-dot"></i>
                            {{ $profile->locality->name }}
                        </span>
                    </p>
                    <div class="flex items-center mt-4">
                        <a href="{{ $profile->facebook }}" class="w-6 h-6">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <p class="text-sm text-gray-500 ml-3">{{ $profile->phone }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="py-12 flex justify-center">
    <h2 class="text-4xl text-gray-800 font-bold">{{ $craft->name }}s in {{ $locality->name }}</h2>
</div>
<div class="mx-auto sm:px-6 lg:px-8">
<div class="bg-gray-200 p-6 mb-2">
    <h4 class="text-xl font-bold">Ad Space for Rent</h4>
    <p class="text-gray-700">Advertise with us!</p>
</div>
    <div class="lg:flex gap-x-2">
        <div class="grow flex flex-wrap gap-6">
            @foreach($profiles as $profile)
                <div class="grow overflow-hidden shadow-lg rounded-lg  cursor-pointer m-auto">
                    <a href="{{ route('profiles.show', ['username' => $profile->user->username]) }}" class="w-full block h-full">
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
        <div class="lg:w-96 mt-6 lg:mt-0 bg-gray-200 p-6">
            <h4 class="text-xl font-bold">Ad Space for Rent</h4>
            <p class="text-gray-700">Advertise with us!</p>
        </div>
    </div>
</div>

@endsection
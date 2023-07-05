@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-7xl">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 bg-test-1 p-1 mt-8">
    <div class="md:col-span-2 bg-white col rounded-lg shadow-lg">
      <div class="flex flex-col gap-2 sm:flex-row">
        <div class="bg-test-2 relative aspect-[16/9] sm:aspect-[2/1] sm:aspect-square sm:w-64 sm:shrink-0">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e">
        </div>
        <div class="p-6">
          <div>
            <h2 class="text-2xl font-bold">{{ $user->profile->first_name }} {{ $user->profile->last_name }}</h2>
            <div>
              <i class="fa-solid fa-star-sharp"></i>
              <i class="fa-solid fa-star-sharp"></i>
              <i class="fa-solid fa-star-sharp"></i>
              <i class="fa-solid fa-star-sharp-half-stroke"></i>
              <i class="fa-regular fa-star-sharp"></i>
              <span class="text-gray-600 text-sm">( 245 reviews )</span>
            </div>
            <div class="mt-2">
              <span class="text-gray-600 font-semibold">{{ $user->profile->craft->name }}</span>
              <span class="text-gray-700 bg-gray-200 px-3 py-1 rounded-full">
                <i class="fa-regular fa-location-dot"></i>
                <span class="text-xs uppercase">{{ $user->profile->locality->name }}</span>
              </span>
            </div>
          </div>

          <hr class="my-4">

          <p class="text-gray-800">{{ $user->profile->bio }}</p>

          <hr class="my-4">

          <div class="flex items-center space-x-2">
            <i class="fa-solid fa-phone text-gray-600"></i>
            <span class="text-gray-600">{{ $user->profile->phone }}</span>
          </div>

          @if ($user->profile->facebook)
          <div class="flex items-center space-x-2">
            <i class="fa-brands fa-facebook text-gray-600"></i>
            <span class="text-gray-600">{{ $user->profile->facebook }}</span>
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="bg-gray-200 flex items-center justify-center">
      Advertise here
    </div>
  </div>
</div>
@endsection
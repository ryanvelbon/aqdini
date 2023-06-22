@extends('layouts.app')

@section('content')
<section class="bg-green-900">
  <div class="pt-16">
    <div class="container mx-auto">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-3xl">
        <h1 class="text-white font-bold text-4xl mb-6">Find the right person for the job</h1>
        <h2 class="text-gray-100 font-medium text-lg mb-12">Search for services in your area</h2>
      </div>
    </div>
  </div>
  <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
    <div class="mx-auto max-w-3xl">
      <form action="{{ route('profiles.index') }}" method="GET">
        <div class="grid grid-cols-1 md:grid-cols-3 md:pb-8 p-4 gap-y-2 gap-x-2">
          <x-dropdown name="craft" :options="$crafts" />
          <x-dropdown name="locality" :options="$localities" />
          <button class="bg-green-500 text-white text-xl font-bold p-2">Search</button>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="">
  <div class="flex flex-wrap justify-center py-12 gap-4">
    @foreach ($craftsA as $craft)
      <div class="craft-card h-80 w-40">
        <h3 class="text-xl font-bold">{{ $craft->name }}</h3>
      </div>
    @endforeach
  </div>
  <div class="flex flex-wrap justify-center py-12 gap-4">
    @foreach ($craftsB as $craft)
      <div class="craft-card w-32 h-32 flex flex-col">
        <i class="fa-duotone fa-{{ $craft->icon ?: 'person' }} fa-2xl w-6 h-6 bg-green-200"></i>
        <h3 class="text-sm">{{ $craft->name }}</h3>
      </div>
    @endforeach
  </div>
  <div class="flex flex-wrap justify-center py-12 gap-4">
    @foreach ($craftsC as $craft)
      <div class="craft-card w-24 h-24 flex flex-col">
        <i class="fa-duotone fa-{{ $craft->icon ?: 'person' }} fa-xl w-4 h-4 bg-green-200"></i>
        <h3 class="text-xs">{{ $craft->name }}</h3>
      </div>
    @endforeach
  </div>
</section>
@endsection


@section('scripts')
<script>

</script>
@endsection
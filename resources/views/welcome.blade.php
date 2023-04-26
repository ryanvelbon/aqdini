@extends('layouts.app')

@section('content')
<section class="bg-orange-200">
  <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
    <div class="mx-auto max-w-3xl">
      <form>
        <div class="bg-green-500 grid grid-cols-1 md:grid-cols-3 p-4 gap-y-2 gap-x-2">
          <x-dropdown name="craft" :options="$crafts" />
          <x-dropdown name="locality" :options="$localities" />
          <button class="bg-blue-200 p-2">Search</button>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="bg-green-200">
  <div class="flex flex-wrap justify-center py-12 gap-4">
    @foreach ($craftsA as $craft)
      <div class="bg-gray-200">
        <h2 class="text-xl font-bold">{{ $craft->name }}</h2>
      </div>
    @endforeach
  </div>
  <div class="flex flex-wrap justify-center py-12 gap-4">
    @foreach ($craftsB as $craft)
      <div class="bg-gray-200">
        <h2 class="text-md font-bold">{{ $craft->name }}</h2>
      </div>
    @endforeach
  </div>
  <div class="flex flex-wrap justify-center py-12 gap-4">
    @foreach ($craftsC as $craft)
      <div class="bg-gray-200">
        <h2 class="text-sm">{{ $craft->name }}</h2>
      </div>
    @endforeach
  </div>
</section>
@endsection


@section('scripts')
<script>

</script>
@endsection
@extends('layouts.base')

@section('body')
    @include('partials.header')
    @yield('content')
    @isset($slot)
        {{ $slot }}
    @endisset
    @include('partials.footer')
    @yield('scripts')
@endsection

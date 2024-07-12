@extends('layouts.base')

@section('body')
    <section class="flex items-center justify-center min-h-screen bg-gray-100">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </section>
@endsection

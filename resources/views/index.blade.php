@extends('Layout')

@section('content')
    <main>
        @include('home')
        @include('about')
        @include('projek')
        @include('contact')
        @include('footer')
    </main>

    {{-- @include('Footer') --}}
@endsection
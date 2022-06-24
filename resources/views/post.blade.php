@extends('layout.app')

@section('content')
    @include('partials.header')

    <main>
        @include('components.post')
    </main>

    @include('partials.footer')
@endsection

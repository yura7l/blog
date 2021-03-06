@extends('layout.app')

@section('title', 'Blog')

@section('content')
    @include('partials.header')

    <main>
        @include('components.posts')
    </main>

    @include('partials.footer')
@endsection

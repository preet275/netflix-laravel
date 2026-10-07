@extends('site.layouts.browse')

@section('title', 'Netflix Home')

@section('content')

    {{-- Browse page navbar --}}
    @include('site.browse.partials.navbar')

    {{-- Browse hero --}}
    @include('site.browse.partials.hero')


    {{-- Browse movies --}}
    @include('site.browse.partials.movies')

    {{-- Browse footer --}}
    @include('site.browse.partials.footer')

@endsection

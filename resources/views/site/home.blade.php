@extends('site.layouts.app')

@section('title', 'Netflix')

@section('content')
@include('site.partials.hero')

@include('site.partials.trending')
@include('site.partials.reasons')
@include('site.partials.faq')
@include('site.partials.cta')
@endsection


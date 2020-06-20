@extends('layouts.menu-master')

@section('open-graph-meta-tags')
    @include('partials.open-graph-meta-tags', ['data' => $salat])
@endsection

@section('content')
    @component('components.blog-details', ['data' => $salat, 'currentPage' => 'সালাত'])

    @endcomponent
@endsection
@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $jakat])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $jakat, 'currentPage' => 'যাকাত'])
        
    @endcomponent
@endsection
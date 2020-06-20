@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $sium])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $sium, 'currentPage' => 'সিয়াম'])
        
    @endcomponent
@endsection
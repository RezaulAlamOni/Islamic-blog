@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $jihad])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $jihad, 'currentPage' => 'জিহাদ'])
        
    @endcomponent
@endsection
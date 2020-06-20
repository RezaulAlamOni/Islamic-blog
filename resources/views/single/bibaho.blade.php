@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $bibaho])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $bibaho, 'currentPage' => 'বিবাহ'])
				
	@endcomponent
@endsection
@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $extra])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $extra, 'currentPage' => 'বিবিধ'])
				
	@endcomponent

@endsection
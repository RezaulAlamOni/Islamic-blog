@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $behave])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $behave, 'currentPage' => 'আচরন'])
			
	@endcomponent
@endsection

<style type="text/css">
	p.c{
		white-space: pre-line;
	}
</style>
@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $doya])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $doya, 'currentPage' => 'দু\'আ'])
				
	@endcomponent
@endsection
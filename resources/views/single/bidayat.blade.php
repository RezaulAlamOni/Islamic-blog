@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $bidayat])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $bidayat, 'currentPage' => 'বিদ‌\'আত'])
			
	@endcomponent
@endsection
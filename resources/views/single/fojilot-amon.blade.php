@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $fojilot])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $fojilot, 'currentPage' => 'ফজিলত পূর্ণ আমল'])
				
	@endcomponent
@endsection
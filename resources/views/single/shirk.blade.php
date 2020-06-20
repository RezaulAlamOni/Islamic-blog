@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $sirk])
@endsection

@section('content')
	@component('components.blog-details', ['data' => $sirk, 'currentPage' => 'শিরক/তাওহীদ'])
        
    @endcomponent
@endsection
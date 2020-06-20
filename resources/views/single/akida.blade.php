@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $akida])
@endsection

@section('content')
    @component('components.blog-details', ['data' => $akida, 'currentPage' => 'আক্বীদা'])
            
    @endcomponent
@endsection
@extends('layouts.menu-master')

@section('open-graph-meta-tags')
	@include('partials.open-graph-meta-tags', ['data' => $hazz])
@endsection


@section('content')
	@component('components.blog-details', ['data' => $hazz, 'currentPage' => 'হাজ্জ'])
        
    @endcomponent
@endsection
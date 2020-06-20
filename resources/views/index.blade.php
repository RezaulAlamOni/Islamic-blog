@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
<div class="row">
    <h2></h2>
@foreach ($akidas as $akida)
	<div class="col-xs-12 col-sm-6 col-md-3">
		<ul>
			  <li> <a href="{{ route('single-akida',$akida->id) }}">{{ $akida->headline }}</a></li>
		</ul>
		
	</div>
@endforeach

</div>
@endsection
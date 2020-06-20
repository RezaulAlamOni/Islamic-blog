@extends('layouts.menu-master')
@section('content')
<div class="row">
	
	<div class="col-xs-12 col-sm-8 col-md-4">
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> হোম </a></li>
			<li><a href="#">হাজ্জ</a></li>
		</ol>
	</div>
	
</div>
<div class="deg">
	@foreach ($hazzs as $hazz)
	<div class="col-xs-12 col-sm-6 col-md-3">
		<ul>
			  <li> <a href="{{ route('single-hazz',$hazz->id) }}" data-toogle="tooltip" title="বিস্তারিত দেখুন">{{ str_limit($hazz->headline,$limit=25) }}</a></li>
		</ul>		
	</div>
	@endforeach			
	
</div>

</br>
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_copy_link"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->


@endsection
<style type="text/css">
	.deg{
		font-size: 14px;
		padding-bottom: 20px;
		padding-top: 15px;
	}
	.deg a:link, a:visited {
		color: #1585b5;
	}
	.deg a{
		text-decoration: none;
	text-decoration-line: none;
	text-decoration-style: initial;
	text-decoration-color: initial;
	}
</style>
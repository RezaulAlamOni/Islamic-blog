<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-4">
		<ol class="breadcrumb">
		  <li><a href="#"><i class="fa fa-home"></i> হোম </a></li>
		  <li><a href="#">{{ $currentPage }}</a></li>  
		</ol>
	</div>		
</div>
@if(!empty($data))
<div class="row">
	<div class="col-md-12">
		<h3 style="color: green">{{ $data->headline }}</h3> <hr>
		<p id="c" style="text-align: justify;">{!! str_replace(['\r\n', '\n', PHP_EOL], '<br/>', $data->articles) !!}</p>
		<!--<p><i class="fa fa-clock-o"></i> {{ date_format($data->created_at,"Y-m-d h:i:sa") }}</p>-->
		<button class="btn btn-info pull-right" onClick="copyToClipboard('c')">Copy text</button>
	</div>
	
	<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_copy_link"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
</div>
@else
<h2>কোন তথ্য পাওয়া যায়নি</h2>
@endif
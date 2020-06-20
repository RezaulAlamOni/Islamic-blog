<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		@hasSection('open-graph-meta-tags')
			@yield('open-graph-meta-tags')
		@else
			<meta name="author" content="Female">
			<meta name="description" content="islam - The complete islamic information website">
			<meta name="keywords" content="islam, salah, jakat, hazz, sium, bidayat, shirk,taohid,jihad,bibaho,achoron,doya,fozilat purno amol,pdf,আক্বীদা,শিরক,তাওহীদ,বিদ‌'আত,সালাহ,সিয়াম,যাকাত,হাজ্জ,জিহাদ,বিবাহ,আচরন,দু'আ,ফজিলত পূর্ণ আমল,জাল ও দুর্বল হাদীস,জ্ঞানীদের কথা,কিছু হাদীস,কুরআন,">
		@endif
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
		<link href="{{asset('islam/css/bootstrap.min.css')}}" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{asset('islam/css/style.css')}}">
		<link rel="icon" type="img/png" href="{{asset('img/favi-icon.png')}}">
		<style type="text/css" media="screen">
		#c{
    		white-space: pre-line;
    		font-family:SolaimanLipiNormal;
    		word-wrap: break-word;
            line-height: 1.74;
            font-size: 15px;
            
    	    }
		.pad{
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 50px;
			padding-bottom: 50px;
			/* text-align: center; */
		}
		.cl{
			background: rgba(0, 0, 0, 0.08);
			width: 100%;
			height: auto;
			}
		li{
			color:#000;
		}
		.navbar-default .navbar-nav>li>a{
				color: #674665;
		}
		.navbar-default .navbar-nav>li>a:hover{
				background-color: #674665;
				color:#fff;
		}
		.navbar-default .navbar-nav > li.active > a,
		.navbar-default .navbar-nav > li.active > a, .navbar-default .navbar-nav > li.current > a,
		.navbar-default .navbar-nav > li.current > a {
		background-color: #674665 !important;
		color:#fff;
				
		}
		.navbar-default .navbar-nav > li.active > a > i,
		.navbar-default .navbar-nav > li.active > a > i, .navbar-default .navbar-nav > li.current > a > i,
		.navbar-default .navbar-nav > li.current > a > i {
		color: #fff;
		}
		.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
		color: #555;
		background-color: #fbf5f5;
		}
		.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
		background-color: #674665;
			color:#fff;
		}
		.navbar-default .navbar-nav .open .dropdown-menu> li.active > a > i,
		.navbar-default .navbar-nav .open .dropdown-menu> li.active > a > i, .navbar-default .navbar-nav .open .dropdown-menu> li.current > a > i,
		.navbar-default .navbar-nav .open .dropdown-menu> li.current > a > i {
		color: #000;
		}
		/* nav effect */
		.cl
		{
			position:relative;
		-webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
		-moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
		box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
		}
		.cl:before, .cl:after
		{
			content:"";
		position:absolute;
		z-index:-1;
		-webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
		-moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
		box-shadow:0 0 20px rgba(0,0,0,0.8);
		top:50%;
		bottom:0;
		left:10px;
		right:10px;
		-moz-border-radius:100px / 10px;
		border-radius:100px / 10px;
		}
		.cl:after
		{
			right:10px;
		left:auto;
		-webkit-transform:skew(8deg) rotate(3deg);
		-moz-transform:skew(8deg) rotate(3deg);
		-ms-transform:skew(8deg) rotate(3deg);
		-o-transform:skew(8deg) rotate(3deg);
		transform:skew(8deg) rotate(3deg);
		}
		.navbar-default .navbar-toggle .icon-bar {
		background-color: #674665;
		}
		.navbar-default .navbar-toggle {
		border-color: #674665;
		}
		.footer {
		padding: 50px 0 20px 0;
		background-color: #674665;
		color: #878c94;
		}
		.footer .title{
		text-align: left;
		color:#fff;
		font-size:25px;
		}
		.footer .social-icon{
		padding:0px;
		margin:0px;
		}
		.footer .social-icon a{
		display:inline-block;
		color:#fff;
		font-size:25px;
		padding:5px;
		}
		.footer .acount-icon a{
		display:block;
		color:#fff;
		font-size:18px;
		padding:5px;
		text-decoration:none;
		}
		.footer .acount-icon .fa{
		margin-right:25px;
		}
		.footer .category a {
		text-decoration: none;
		color: #fff;
		display: inline-block;
		padding: 5px 20px;
		margin: 1px;
		border-radius:4px;
		margin-top: 6px;
		background-color: black;
		border: solid 1px #fff;
		}
		.footer .payment{
		margin:0px;
		padding:0px;
		list-style-type:none
		}
		.footer .payment li{
		list-style-type:none
		}
		.footer .payment li a {
		text-decoration: none;
		display: inline-block;
		color: #fff;
		float: left;
		font-size: 25px;
		padding: 10px 10px;
		}

		@-webkit-keyframes zoom {
		  from {
		    -webkit-transform: scale(1, 1);
		  }
		  to {
		    -webkit-transform: scale(1.5, 1.5);
		  }
		}

		@keyframes zoom {
		  from {
		    transform: scale(1, 1);
		  }
		  to {
		    transform: scale(1.5, 1.5);
		  }
		}

		.carousel-inner .item > img {
		  -webkit-animation: zoom 20s;
		  animation: zoom 20s;
		}
		.ban img{
			width:1368px;
			height:105px;
		}
		
		@media only screen and (max-width: 600px) and (min-width: 280px) {
            #c{
    		white-space: pre-line;
    		font-family:SolaimanLipiNormal;
    		word-wrap: break-word;
            line-height: 1.74;
            font-size: 15px;
            
    	    }
        }
		</style>
		
	</head>
	<body>	
	<!--header-->
		<div class="row">
		  <div class="col-12 ban">
		    <img class="img-responsive" src="{{asset('img/banner1.gif')}}" alt="islam">
		   </div>
		</div>
		<!--end header-->
		<nav class="navbar navbar-default cl">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url('/')}}"><img class="img-circle" src="../img/logo1.jpg" width="100px" height="30px"></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{url('/')}}"><i class="fa fa-home"></i> হোম</a></li>
						<li><a href="{{url('sirk-taohid')}}">শিরক/তাওহীদ</a></li>
						<li><a href="{{ url('salat') }}">সালাহ</a></li>
						<!--<li><a href="{{url('quran')}}">কোরআন</a></li>-->
						<li><a href="{{url('sium')}}">সিয়াম</a></li>
						<li><a href="{{url('jakat')}}">যাকাত</a></li>
						<li><a href="{{url('hazz')}}">হাজ্জ</a></li>
						<li><a href="{{url('jihad')}}">জিহাদ</a></li>
						<li><a href="{{url('bibaho')}}">বিবাহ</a></li>
						<li>
							<a href="{{url('akida')}}">আক্বীদ</a>

						</li>
						<li><a href="{{url('behave')}}">আচরন</a></li>
						<li><a href="{{url('doya')}}">দু'আ</a></li>
						<li><a href="{{url('fojilot')}}">ফজিলত পূর্ণ আমল</a></li>
						<li class="dropdown">
							<a href="{{url('bidayat')}}" >কবিরা গুনাহ ও বিদ‌'আত<!--<span class="caret"></span>--></a>
							<!--<ul class="dropdown-menu">
								<li><a href="#"> >&nbsp   menu1</a></li>
								<li><a href="#"> >&nbsp   menu1</a></li>
								<li><a href="#"> >&nbsp   menu1</a></li>
								<li><a href="#"> >&nbsp   menu1</a></li>
							</ul>-->
						</li>
						<li>
							<a href="{{url('extra')}}">বিবিধ </a>
						</li>
					</ul>
					</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				
				<div class="container pad">
					@yield('content')
					
				</div>
				
				<!--   FOOTER START================== -->
				<footer class="footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<h4 class="title">About us</h4>
								<p style="color:#fff;">islamicinfos is free islamic website where you can learn islamic information that makes your life bright.</p>
								<ul class="social-icon">
									<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
								</ul>
							</div>
							<div class="col-sm-3">
								<h4 class="title">My Account</h4>
								<span class="acount-icon">
									<a href="#"><i class="fa fa-heart" aria-hidden="true"></i> List</a>
									<a href="#"><i class="fa fa-users" aria-hidden="true"></i>Group</a>
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
									<a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Language</a>
								</span>
							</div>
							<div class="col-sm-3">
								<h4 class="title">Articles Category</h4>
								<div class="category">
									
								</div>
							</div>
							<div class="col-sm-3">
								<h4 class="title">Islam</h4>
								<p style="color:#fff;">ইসলাম হলো পূর্ণাঙ্গ জীবন ব্যবস্থা</p>
								{{-- <ul class="payment">
									<li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
								</ul> --}}
							</div>
						</div>
						<hr>
						<div class="row text-center"><a href="http://lacodeid.com/" style="color: #fff;">All Rights Reserved © islamicinfos 2018.</a></div>
					</div>
				</footer>
				<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
				<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="{{asset('islam/js/bootstrap.min.js')}}"></script>
				<script> 
                        function copyToClipboard(id) {
                        var from = document.getElementById(id);
                        var range = document.createRange();
                        window.getSelection().removeAllRanges();
                        range.selectNode(from);
                        window.getSelection().addRange(range);
                        document.execCommand('copy');
                        window.getSelection().removeAllRanges();
                       }
                    </script>
				@yield('scripts')
			</body>
		</html>
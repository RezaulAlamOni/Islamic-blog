<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('aimeos_header')

	<title>SelfStyleBD</title>

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
	<link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="icon" type="uploads/png" href="{{asset('uploads/favi-icon.png')}}">

	@yield('aimeos_styles')

</head>
<body>
<nav class="navbar navbar-default">

	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/list">
				<img class="img-circle" src="{{asset('uploads/self.jpg')}}" width="100px" height="30px">
			</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">

				@if (Auth::guest())
					<li><a href="/login">Login</a></li>
					<li><a href="/register">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
						   aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{route('aimeos_shop_account',
                                ['site'=>Route::current()->parameter('site','default'),
                                'locale'=>Route::current()->parameter('locale','en'),
                                'currency'=>Route::current()->parameter('currency','EUR')
                                ])
                                }}" title="My account">My account</a>
							</li>
							<li>
								<form id="logout" action="/logout" method="POST">
									{{csrf_field()}}
								</form>
								<a href="javascript: document.getElementById('logout').submit();">Logout</a>
							</li>
						</ul>
					</li>
				@endif

				<li>@yield('aimeos_head')</li>
			</ul>
		</div>
	</div>
</nav>
<div class="col-xs-12">

	@yield('aimeos_nav')
	@yield('aimeos_stage')
	@yield('aimeos_body')
	@yield('aimeos_aside')
	@yield('content')

</div>

<!-- Scripts -->
<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
@yield('aimeos_scripts')

</body>
</html>

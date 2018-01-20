<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title', 'Home Page')</title>

	<!-- Fonts -->
	<!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

	<!-- Styles -->
	<style>
		html, body {
			background-color: #fff;
			color: #636b6f;
			font-weight: 100;
			height: 100vh;
			margin: 0 15px;
			margin-bottom: 80px;
		}

		.full-height {
			height: 100vh;
		}

		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}

		.position-ref {
			position: relative;
		}

		.top-right {
			position: absolute;
			right: 10px;
			top: 18px;
		}

		.content {
			text-align: center;
		}

		.title {
			padding-top: 20px;
			margin-bottom: 25px;
		}

		.header {
			background-color: #00BFFF;
			border-radius: 15px;
		}
		.links-h > a {
			color: #636b6f;
			padding: 0 25px;
			font-size: 12px;
			font-weight: 600;
			letter-spacing: .1rem;
			text-decoration: none;
			text-transform: uppercase;
		}

		.footer {
			background-color: rgba(0,0,0,0.5);
			margin-bottom: 45px;
			padding: 8px 0;
			border-radius: 10px;
		}

		.links-f > a {
			color: #636b6f;
			padding-top: 25px;
			font-size: 12px;
			font-weight: 600;
			letter-spacing: .1rem;
			text-decoration: none;
			text-transform: uppercase;
		}
	</style>
	
	<!-- Bootstrap 3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery (Bootstrap 所有外掛均需要使用) -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="flex-center position-ref full-height">
		@if (Route::has('login'))
			<div class="top-right links">
				@auth
					<a href="{{ url('/home') }}">Home</a>
				@else
					<a href="{{ route('login') }}">Login</a>
					<a href="{{ route('register') }}">Register</a>
				@endauth
			</div>
		@endif

		<div class="content full-height">
			@include('layouts.header')

			@yield('contents')

			@include('layouts.footer')
		</div>
	</div>
</body>
</html>

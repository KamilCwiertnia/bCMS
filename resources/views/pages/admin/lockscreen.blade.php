<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Beziworld.eu - Panel Administratora</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset('template/dashboard/vendor/bootstrap/css/bootstrap.css') }}">

	<link rel="stylesheet" href="{{ asset('template/dashboard/vendor/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('template/dashboard/vendor/magnific-popup/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('template/dashboard/vendor/bootstrap-datepicker/css/datepicker3.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('template/dashboard/css/theme.css') }}">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ asset('template/dashboard/css/skins/default.css') }}">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ asset('template/dashboard/css/theme-custom.css') }}">

	<!-- Head Libs -->
	<script src="{{ asset('template/dashboard/vendor/modernizr/modernizr.js') }}"></script>
</head>
<body style="background: #000;">
	@include('errors.error')
	<!-- start: page -->
	<section class="body-sign body-locked">
		<div class="center-sign">
			<div class="panel panel-sign">
				<div class="panel-body">
					{!! Form::open(['action' => 'LockScreenController@unlock', 'method' => 'POST']) !!}
						<div class="current-user text-center">
							<img src="/uploads/avatars/{{ $user->avatar }}" alt="{{ $user->name }} {{ $user->surname }}" class="img-circle user-image" />
							<h2 class="user-name text-dark m-none">{{ $user->name }} {{ $user->surname }}</h2>
							<p class="user-email m-none">{{ $user->email }}</p>
						</div>
						<div class="form-group mb-lg">
							<div class="input-group input-group-icon">
								{!! Form::password('password',['class'=>'form-control input-lg', 'placeholder'=>'Hasło']) !!}
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-lock"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-6">
								<p class="mt-xs mb-none">
									<a href="#">{{ $user->name }} to nie Ty?</a>
								</p>
							</div>
							<div class="col-xs-6 text-right">
								{!! Form::submit('Odblokuj',['class'=>'btn btn-primary']) !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>
	<!-- end: page -->

	<!-- Vendor -->
	<script src="{{ asset('template/dashboard/vendor/jquery/jquery.js') }}"></script>
	<script src="{{ asset('template/dashboard/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
	<script src="{{ asset('template/dashboard/vendor/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('template/dashboard/vendor/nanoscroller/nanoscroller.js') }}"></script>
	<script src="{{ asset('template/dashboard/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('template/dashboard/vendor/magnific-popup/magnific-popup.js') }}"></script>
	<script src="{{ asset('template/dashboard/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{ asset('template/dashboard/js/theme.js') }}"></script>

	<!-- Theme Custom -->
	<script src="{{ asset('template/dashboard/js/theme.custom.js') }}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{ asset('template/dashboard/js/theme.init.js') }}"></script>

</body>
</html>
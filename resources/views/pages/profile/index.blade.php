@extends('layouts.public')
@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li class="active">Profil</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1>Profil</h1>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<span class="img-thumbnail">
				<img alt="" class="img-responsive" src="/uploads/avatars/{{ $user->avatar }}" height="300">
			</span>
		</div>
		<div class="col-md-8">
			<h2 class="mb-none">{{ $user->name }} <strong>{{ $user->surname }}</strong></h2>
			<h4 class="heading-primary">{{ Auth::user()->roles->get(0)->display_name }}</h4>
			<a href="{{ url('profil/edytuj') }}" class="btn btn-primary btn-xs">Edytuj</a>
			<hr class="solid">
			<p>{{ $user->description }}</p>
			<ul class="list list-unstyled">
				<li><i class="fa fa-facebook"></i> <a href="{{ $user->facebook_url }}">{{ $user->facebook_url }}</a></li>
				<li><i class="fa fa-google-plus"></i> <a href="{{ $user->gplus_url }}">{{ $user->gplus_url }}</a></li>
				<li><i class="fa fa-instagram"></i> <a href="{{ $user->instagram_url }}">{{ $user->instagram_url }}</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr>
		</div>
	</div>
</div>
@endsection
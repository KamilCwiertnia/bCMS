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
			<h4 class="heading-primary">Web Designer</h4>
			<a href="{{ url('profil/edytuj') }}" class="btn btn-primary btn-xs">Edytuj</a>
			<hr class="solid">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>
			<ul class="list list-icons">
				<li><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis.</li>
				<li><i class="fa fa-check"></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
				<li><i class="fa fa-check"></i> Iaculis vulputate id quis nisl.</li>
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
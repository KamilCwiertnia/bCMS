@extends('layouts.dashboard')
@section('content')
@include('errors.error')
<div class="row">
	<div class="col-md-4 col-lg-3">
		<section class="panel">
			<div class="panel-body">
				<div class="thumb-info mb-md">
					<img alt="{{  $user->login }}" src="/uploads/avatars/{{ $user->avatar }}" class="rounded img-responsive">
					<div class="thumb-info-title">
						<span class="thumb-info-inner">{{ $user->name}} {{ $user->surname }}</span>
						<span class="thumb-info-type">{{ $user->roles->get(0)->display_name }}</span>
					</div>
				</div>

				<div class="widget-toggle-expand mb-md">
					asd
				</div>
			</div>
		</section>
	</div>
<div class="col-md-8 col-lg-6">

		<div class="tabs">
			<ul class="nav nav-tabs tabs-primary">
				<li class="active">
					<a href="#info" data-toggle="tab">Informacje</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="info" class="tab-pane active">
					<h4 class="mb-md">{{ $user->name}} {{ $user->surname }}</h4> 
					<span class="fa fa-envelope"></span> {{ $user->email }}</a>
				</div>
			</div>
		</div>
	</div>
	

</div>
</div>
@endsection
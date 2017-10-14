@extends('layouts.dashboard')
@section('content')
@include('errors.error')
<div class="row">
	<div class="col-md-4 col-lg-3">
		<section class="panel">
			<div class="panel-body">
				<div class="thumb-info mb-md">
					<img src="/uploads/avatars/{{ $user->avatar }}" class="rounded img-responsive" alt="{{ $user->name}} {{ $user->surname }}">
					<div class="thumb-info-title">
						<span class="thumb-info-inner">{{ $user->name}} {{ $user->surname }}</span>
						<span class="thumb-info-type"> 
							@foreach($user->roles as $role)
							{{ $role->name }}
							@endforeach 
						</span>
					</div>
				</div>
				<hr class="dotted short">

				<h6 class="text-muted">Krótki opis</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>

				<div class="social-icons-list">
					<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
					<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
					<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-8 col-lg-6">

		<div class="tabs">
			<ul class="nav nav-tabs tabs-primary">
				<li class="active">
					<a href="#edit" data-toggle="tab">Edycja</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="edit" class="tab-pane active">
					{!! Form::model($user, ['method'=>'PATCH','class'=>'form-horizontal', 'action'=>['AdminUserController@update', $user->id]]) !!}
					<h4 class="mb-xlg">Informacje</h4>
					<fieldset>
						<div class="form-group">
							{!! Form::label('name','Imię',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Imię']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('surname','Nazwisko',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('surname', null,['class'=>'form-control', 'placeholder'=>'Nazwisko']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('email','Adres E-mail',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Adres E-mail']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('roles','Rola',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::select('roles[]', $roles, null,['class' => 'form-control mb-md']) !!}
							</div>
						</div>
					</fieldset>
					<hr class="dotted tall">	
					<fieldset>
						<div class="form-group">
							<div class="col-md-8 col-md-offset-3">
								{!! Form::submit('Zapisz zmiany',['class'=>'btn btn-primary']) !!}
								{!! Form::reset('Reset',['class'=>'btn btn-default']) !!}
							</div>
						</div>
					</fieldset>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
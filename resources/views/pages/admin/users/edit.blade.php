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
							{{ $role->display_name }}
							@endforeach 
						</span>
					</div>
				</div>
				<hr class="dotted short">

				<h6 class="text-muted">Krótki opis</h6>
				<p>{{  str_limit($user->description, 150) }}</p>

				<div class="social-icons-list">
					<a rel="tooltip" data-placement="bottom" target="_blank" href="{{ $user->facebook_url }}" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
					<a rel="tooltip" data-placement="bottom" href="{{ $user->gplus_url }}" data-original-title="Google+"><i class="fa fa-google-plus"></i><span>Google+</span></a>
					<a rel="tooltip" data-placement="bottom" href="{{ $user->instagram_url }}" data-original-title="Instagram"><i class="fa fa-instagram"></i><span>Linkedin</span></a>
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
						</fieldset>
						<hr class="dotted tall">
						<h4 class="mb-xlg">Rola użytkownika</h4>
						<fieldset>
						<div class="form-group">
							{!! Form::label('roles','Rola',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::select('roles[]', $roles, null,['class' => 'form-control mb-md']) !!}
							</div>
						</div>
						</fieldset>
					<hr class="dotted tall">	
					<h4 class="mb-xlg">Opis</h4>
					<fieldset>
						<div class="form-group">
							{!! Form::label('description','Opis',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::textarea('description', null,['class'=>'form-control']) !!}
							</div>
						</div>						
					</fieldset>
					<hr class="dotted tall">	
					<h4 class="mb-xlg">Social Media</h4>
					<fieldset>
						<div class="form-group">
							{!! Form::label('facebook_url','Facebook',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('facebook_url', null,['class'=>'form-control', 'placeholder'=>'Facebook']) !!}
							</div>
						</div>	
						<div class="form-group">
							{!! Form::label('gplus_url','Google+',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('gplus_url', null,['class'=>'form-control', 'placeholder'=>'Google+']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('instagram_url','Instagram',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('instagram_url', null,['class'=>'form-control', 'placeholder'=>'Instagram']) !!}
							</div>
						</div>					
					</fieldset>
					<hr class="dotted tall">	
					<h4 class="mb-xlg">Opcje</h4>
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